<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormInterface;
use Behat\Transliterator\Transliterator;
use Spipu\Html2Pdf\Html2Pdf;
use App\Repository\ProfileRepository;
use App\Helper\FormHelper;
use App\Form\ContactModel;
use App\Form\ContactType;
use App\Entity\Profile;
use Swift_Mailer;
use Swift_Message;

class MainController extends AbstractController
{
    private $profileRepository;

    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    /**
     * Create contact form
     * 
     * @return FormInterface Contact form
     */
    private function getContactForm(): FormInterface
    {
        return $this->createForm(ContactType::class, new ContactModel(), [
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ]);
    }

    /**
     * Retrieve the profile
     *
     * @throws NotFoundHttpException If the profile does not exist
     * 
     * @return Profile The retrieved profile
     */
    private function getProfile(): Profile
    {
        $email = $this->getParameter('email');

        try {
            return $this->profileRepository->getByEmail($email);
        } catch (Exception $exception) {
            throw $this->createNotFoundException('Unable to retrieve profile with email "'.$email.'"');
        }
    }

    /**
     * Display home page
     * 
     * @return Response                             Response
     */
    public function index(): Response
	{
        $profile = $this->getProfile();

        $form = $this->getContactForm();
        $form = $form->createView();

		return $this->render('index.html.twig', compact('profile', 'form'));
	}

    /**
     * Display CV
     * 
     * @return Response Response
     */
    public function curriculumVitae(): Response
    {
        $profile = $this->getProfile();

        $view = $this->renderView('curriculum-vitae.html.twig', compact('profile'));

        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML($view);
        $html2pdf->output(Transliterator::urlize($profile->getFullname().'-curriculum-vitae').'.pdf');

        return new Response();
    }

    /**
     * Handle contact form submit
     * 
     * @param  Request           $request           Request
     * @param  Swift_Mailer      $mailer            Mailer
     *
     * @return Response                             Response
     */
    public function contact(Request $request, Swift_Mailer $mailer): Response
    {
        $profile = $this->getProfile();

        $form = $this->getContactForm();
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $contact = $form->getData();

            	$message = (new Swift_Message($contact->getSubject()))
        	        ->setFrom($contact->getEmail(), $contact->getEmail())
        	        ->setTo($profile->getEmail(), $profile->getFullname())
        	        ->setBody($contact->getMessage())
        	    ;

        	    $mailer->send($message);

                return $this->json(['success' => true]);
            } else {
               return $this->json(FormHelper::getErrors($form)); 
            }
        }

        throw $this->createNotFoundException();
    }
}
