<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PersonneFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $personne = new Personne();
		 $personne->setFullName();
		 $personne->setMobile();
		 $personne->setEmail();
         $manager->persist($personne);

        $manager->flush();
    }
}
