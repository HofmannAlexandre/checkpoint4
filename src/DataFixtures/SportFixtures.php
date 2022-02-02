<?php

namespace App\DataFixtures;

use App\Entity\Sport;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SportFixtures extends Fixture
{
    public const NAME = [
        'Lancer de Javelot',
        'lancer de Disque',
        'Course',
        'Lutte',
        'Saut en Longueur',
        'Pancrace',
        'Pugilat',
    ];
    
    public function load(ObjectManager $manager)
    {
        foreach (self::NAME as $nameSport) {
            $name = new Sport();
            $name->setName($nameSport);

            $manager->persist($name);
        }

        $manager->flush();
    }
}