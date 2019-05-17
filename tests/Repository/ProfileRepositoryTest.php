<?php

namespace App\Tests\Repository;

use App\Entity\Profile;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProductRepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        self::bootKernel();

        $this->entityManager = self::$container
            ->get('doctrine')
            ->getManager();
    }

    public function testGetByEmail()
    {
        $profile = $this->entityManager
            ->getRepository(Profile::class)
            ->getByEmail(self::$container->getParameter('email'))
        ;

        $this->assertNotNull($profile);
        $this->assertInstanceOf(Profile::class, $profile);
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->entityManager->close();
        $this->entityManager = null; // avoid memory leaks
    }
}
