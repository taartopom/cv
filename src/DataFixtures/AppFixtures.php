<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Profile;
use App\Entity\Social;
use App\Entity\Experience;
use App\Entity\Formation;
use App\Entity\Skill;
use App\Entity\Work;
use App\DataFixtures\Data;
use DateTimeImmutable;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $profile = $this->loadProfile($manager);

        $this->loadSocial($manager, $profile);
        $this->loadFormations($manager, $profile);
        $this->loadExperiences($manager, $profile);
        $this->loadSkills($manager, $profile);
        $this->loadWorks($manager, $profile);

        $manager->persist($profile);
        $manager->flush();
    }

    public function loadSocial(ObjectManager $manager, Profile $profile)
    {
        foreach (Data::PROFILE['social'] as $social) {
            $socialEntity = (new Social())
                ->setClassName($social['className'])
                ->setTitle($social['title'])
                ->setLink($social['link'])
                ->setProfile($profile)
            ;

            $manager->persist($socialEntity);
        }
    }

    public function loadFormations(ObjectManager $manager, Profile $profile)
    {
        foreach (Data::PROFILE['formations'] as $formation) {
            $formationEntity = (new Formation())
                ->setPlace($formation['place'])
                ->setDegree($formation['degree'])
                ->setStartDate(new DateTimeImmutable($formation['startDate']))
                ->setEndDate($formation['endDate'] ? new DateTimeImmutable($formation['endDate']) : null)
                ->setCity($formation['city'])
                ->setDescription($formation['description'])
                ->setProfile($profile)
            ;

            $manager->persist($formationEntity);
        }
    }

    public function loadExperiences(ObjectManager $manager, Profile $profile)
    {
        foreach (Data::PROFILE['experiences'] as $experience) {
            $experienceEntity = (new Experience())
                ->setCompany($experience['company'])
                ->setJobName($experience['jobName'])
                ->setStartDate(new DateTimeImmutable($experience['startDate']))
                ->setEndDate($experience['endDate'] ? new DateTimeImmutable($experience['endDate']) : null)
                ->setCity($experience['city'])
                ->setDescription($experience['description'])
                ->setProfile($profile)
            ;

            $manager->persist($experienceEntity);
        }
    }

    public function loadSkills(ObjectManager $manager, Profile $profile)
    {
        foreach (Data::PROFILE['skills'] as $skill) {
            $skillEntity = (new Skill())
                ->setName($skill['name'])
                ->setPercentage($skill['percentage'])
                ->setProfile($profile)
            ;

            $manager->persist($skillEntity);
        }
    }

    public function loadWorks(ObjectManager $manager, Profile $profile)
    {
        foreach (Data::PROFILE['works'] as $index => $work) {
            $workEntity = (new Work())
                ->setTitle($work['title'])
                ->setDescription($work['description'])
                ->setCover($work['cover'])
                ->setLink(array_key_exists('link', $work) ? $work['link'] : null)
                ->setPosition($index + 1)
                ->setProfile($profile)
            ;

            $manager->persist($workEntity);
        }
    }

    public function loadProfile(ObjectManager $manager)
    {
    	return (new Profile())
    		->setFirstname(Data::PROFILE['firstname'])
			->setLastname(Data::PROFILE['lastname'])
			->setEmail(Data::PROFILE['email'])
			->setMobile(Data::PROFILE['mobile'])
			->setWebsite(Data::PROFILE['website'])
            ->setProfession(Data::PROFILE['profession'])
            ->setAddress(Data::PROFILE['address'])
            ->setCity(Data::PROFILE['city'])
            ->setZipcode(Data::PROFILE['zipcode'])
            ->setShortDescription(Data::PROFILE['shortDescription'])
            ->setLongDescription(Data::PROFILE['longDescription'])
		;
    }
}
