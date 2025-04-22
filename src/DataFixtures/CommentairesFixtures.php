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
        $commentaire1->setTitre('Découvrez un Maroc authentique');
        $commentaire1->setDescription('Plongez au cœur du Maroc authentique à travers des paysages grandioses et des rencontres inoubliables. Découvrez des villages berbères, des oasis secrètes et des dunes infinies pour une immersion unique.');
        $commentaire1->setIcone('/uploads/icone-palmier.png'); 
        $manager->persist($commentaire1);

        $commentaire2 = new Commentaires();
        $commentaire2->setTitre('Des aventures pour toute la famille');
        $commentaire2->setDescription('Offrez à votre famille des souvenirs inoubliables avec des activités adaptées à tous les âges. Balade en dromadaire au coucher du soleil, nuits étoilées sous une tente berbère, ou exploration des kasbahs historiques.');
        $commentaire2->setIcone('/uploads/icone-camel.png'); 
        $manager->persist($commentaire2);

        $commentaire3 = new Commentaires();
        $commentaire3->setTitre('Nos circuit privé en 4x4');
        $commentaire3->setDescription('Partez à l’aventure en toute liberté avec nos circuits privés en 4x4 à travers le sud du Maroc. Accompagné d’un guide local expérimenté, traversez des paysages variés entre montagnes, vallées verdoyantes et dunes dorées.');
        $commentaire3->setIcone('/uploads/icone-4x4.png'); 
        $manager->persist($commentaire3);

        $manager->flush();
    }
}
