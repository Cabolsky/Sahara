<?php

namespace App\DataFixtures;

use App\Entity\Excursions;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ExcursionsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $excursion1 = new Excursions();
        $excursion1->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits à travers le dessert Agadir')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-1.jpg')
            ->setVilleDepart('Agadir')
            ->setVilleArrivee('Cassablanca')
            ->setNombrePersonnes('5-6')
            ->setDuree('1 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('350.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->setDisponible(true);
        $manager->persist($excursion1);

        $excursion2 = new Excursions();
        $excursion2->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits à travers le dessert Agadir')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-2.jpg')
            ->setVilleDepart('Agadir')
            ->setVilleArrivee('Cassablanca')
            ->setNombrePersonnes('5-6')
            ->setDuree('1 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('350.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->setDisponible(true);
        $manager->persist($excursion2);

        $excursion3 = new Excursions();
        $excursion3->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits à travers le dessert Agadir')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-3.jpg')
            ->setVilleDepart('Agadir')
            ->setVilleArrivee('Cassablanca')
            ->setNombrePersonnes('5-6')
            ->setDuree('1 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('350.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->setDisponible(true);
        $manager->persist($excursion3);

        $excursion4 = new Excursions();
        $excursion4->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits à travers le dessert Agadir')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-1.jpg')
            ->setVilleDepart('Agadir')
            ->setVilleArrivee('Cassablanca')
            ->setNombrePersonnes('5-6')
            ->setDuree('1 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('350.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->setDisponible(true);
        $manager->persist($excursion4);

        $excursion5 = new Excursions();
        $excursion5->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits à travers le dessert Agadir')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-2.jpg')
            ->setVilleDepart('Agadir')
            ->setVilleArrivee('Cassablanca')
            ->setNombrePersonnes('5-6')
            ->setDuree('1 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('350.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->setDisponible(false);
        $manager->persist($excursion5);

        $excursion6 = new Excursions();
        $excursion6->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits à travers le dessert Agadir')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-3.jpg')
            ->setVilleDepart('Agadir')
            ->setVilleArrivee('Cassablanca')
            ->setNombrePersonnes('5-6')
            ->setDuree('1 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('350.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->setDisponible(false);
        $manager->persist($excursion6);



        $manager->flush();
    }
}
