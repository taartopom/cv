<?php

namespace App\Repository;

use App\Entity\Profile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ProfileRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Profile::class);
    }

    /**
     * Retrieve a profile from email
     * 
     * @param  string $email Profile email
     * 
     * @return Profile Retrieved profile
     */
    public function getByEmail(string $email): Profile
    {
        $dql = '
            SELECT
                profile,
                socials,
                experiences,
                formations,
                skills,
                works
            FROM App:Profile profile
            INNER JOIN profile.socials socials
            INNER JOIN profile.experiences experiences
            INNER JOIN profile.formations formations
            INNER JOIN profile.skills skills
            INNER JOIN profile.works works
            WHERE profile.email = :email
            ORDER BY
                experiences.startDate DESC,
                formations.startDate DESC,
                works.position ASC,
                skills.percentage DESC
        ';

        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameters(compact('email'));

        return $query->getSingleResult();
    }
}
