<?php
namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Offre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $hasher) {}

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setNom('user '.$i);
            $user->setPrenom('user '.$i);
            $user->setMail('user'.$i.'@gmail.com');
            $password = $this->hasher->hashPassword($user, 'user'.$i);
            $user->setMotDePasse($password);
            $user->setPoint(0);
            $user->setEstEmployeur(false);
            $manager->persist($user);
        }

        for ($i = 0; $i < 20; $i++) {
            $offre = new Offre();
            $offre->setTitre('offre '.$i);
            $offre->setDescription('description de loffre '.$i);
            $offre->setEntreprise('entreprise '.$i);
            $offre->setTag('stage');
            $manager->persist($offre);
        }

        $manager->flush();
    }
}