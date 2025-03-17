<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $articles = [
            [
                'photo' => 'picture-1.jpg',
                'titre' => 'Vivez l’Aventure Marocaine',
                'description' => 'Escapade Sahara vous invite à explorer le désert marocain à travers des circuits privés sur mesure. À bord d’un 4x4, partez à la découverte des dunes dorées, des oasis cachées et des villages berbères authentiques, guidés par des experts locaux. Que ce soit une nuit en bivouac sous les étoiles, une balade en dromadaire ou un trek au cœur de paysages grandioses, laissez-vous envoûter par la magie du désert et vivez une aventure inoubliable.',
            ],
            [
                'photo' => 'picture-2.jpg',
                'titre' => 'Activités au Cœur du Désert',
                'description' => 'Escapade Sahara vous propose une multitude d’activités pour découvrir le désert autrement. Laissez-vous tenter par une balade en dromadaire au coucher du soleil, un trek au cœur des dunes ou une nuit magique sous une tente berbère. Explorez les paysages sauvages, les gorges spectaculaires et visitez les villages traditionnels pour une immersion totale dans l\'âme du Maroc.',
            ],
            [
                'photo' => 'picture-3.jpg',
                'titre' => 'Nos circuits privés.',
                'description' => 'Partez pour une aventure inoubliable avec nos circuits privés en 4x4, conçus sur plusieurs jours pour explorer le sud du Maroc. Accompagnés d’un guide local, traversez des paysages grandioses, des dunes du désert aux vallées reculées. Chaque circuit inclut des activités immersives : bivouac sous les étoiles, balades en dromadaire et découverte des traditions berbères.',
            ],
            [
                'photo' => 'picture-4.jpg',
                'titre' => 'Nos excursions privées.',
                'description' => 'Profitez d’une journée d’évasion au départ de Marrakech avec nos excursions privées en 4x4. Accompagnés d’un guide local, partez à la découverte des merveilles du sud marocain : kasbahs historiques, vallées verdoyantes et étendues désertiques. Chaque excursion inclut des pauses authentiques, des rencontres enrichissantes et des panoramas à couper le souffle. Une expérience unique, alliant confort, dépaysement et immersion culturelle.',
            ],
            [
                'photo' => 'picture-5.jpg',
                'titre' => 'Lorem ipsum dolor sit amet5',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
            ],
            [
                'photo' => 'picture-7.jpg',
                'titre' => 'Notre siège social.',
                'description' => 'Notre siège est situé au cœur du Maroc, point de départ idéal pour explorer le désert et ses merveilles. Il nous permet d’organiser vos circuits et excursions dans les meilleures conditions, avec un service personnalisé.',
            ]
        ];

        foreach ($articles as $articleData) {
            $article = new Article();
            $article->setPhoto($articleData['photo']);
            $article->setTitre($articleData['titre']);
            $article->setDescription($articleData['description']);

            $manager->persist($article);
        }

        $manager->flush();
    }
}
