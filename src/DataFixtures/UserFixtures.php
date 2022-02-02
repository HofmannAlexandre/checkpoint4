<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setName('Hesiode');
        $user->setPreference('Lancer de Javelot');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Thebes');
        $user->setPreference('Saut en Longueur');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Heracles');
        $user->setPreference('Pugilat');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Achille');
        $user->setPreference('Pancrace');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Ulysse');
        $user->setPreference('Course');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Hector');
        $user->setPreference('Lutte');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Agamemnon');
        $user->setPreference('Lancer de disque');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Thesee');
        $user->setPreference('Lancer de Javelot');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $manager->flush();
    }
}