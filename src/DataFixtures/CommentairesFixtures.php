<?php

namespace App\DataFixtures;

use App\Entity\Commentaires;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentairesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $commentaire1 = new Commentaires();
        $commentaire1->setTitre('Lorem ipsum dolor sit amet1');
        $commentaire1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ');
        $commentaire1->setIcone('/assets/image/icone-palmier.png'); 
        $manager->persist($commentaire1);

        $commentaire2 = new Commentaires();
        $commentaire2->setTitre('Lorem ipsum dolor sit amet2');
        $commentaire2->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ');
        $commentaire2->setIcone('/assets/image/icone-camel.png'); 
        $manager->persist($commentaire2);

        $commentaire3 = new Commentaires();
        $commentaire3->setTitre('Lorem ipsum dolor sit amet3');
        $commentaire3->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. ');
        $commentaire3->setIcone('/assets/image/icone-4x4.png'); 
        $manager->persist($commentaire3);

        $manager->flush();
    }
}
