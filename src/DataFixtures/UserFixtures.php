<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $userPasswordEncoder;

    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder){
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $userAdri = new User();
        $userAdri->setEmail("figueres.adrien@gmail.com");
        $userAdri->setPassword($this->userPasswordEncoder->encodePassword($userAdri, "bersek66"));
        $userAdri->setRoles(array("ROLE_ADMIN"));


        $manager->persist($userAdri);
        $manager->flush();
    }
}
