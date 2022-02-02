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
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Thebes');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Heracles');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Achille');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Ulysse');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Hector');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Agamemnon');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $user = new User();
        $user->setName('Thesee');
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'userPassword');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $manager->flush();
    }
}