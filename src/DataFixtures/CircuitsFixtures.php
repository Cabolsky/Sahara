<?php

namespace App\DataFixtures;

use App\Entity\Circuits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CircuitsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Circuit 1
        $circuit1 = new Circuits();
        $circuit1->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits à travers le dessert Agadir')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-1.jpg')
            ->setVilleDepart('Agadir')
            ->setVilleArrivee('Cassablanca')
            ->setNombrePersonnes('5-6')
            ->setDuree('3 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('350.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit1);

        // Circuit 2
        $circuit2 = new Circuits();
        $circuit2->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits à travers le désert de Marrakech')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-2.jpg')
            ->setVilleDepart('Marrakech')
            ->setVilleArrivee('Ouarzazate')
            ->setNombrePersonnes('4-5')
            ->setDuree('2 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('299.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit2);

        // Circuit 3
        $circuit3 = new Circuits();
        $circuit3->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits aventure à Fès')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-3.jpg')
            ->setVilleDepart('Fès')
            ->setVilleArrivee('Rabat')
            ->setNombrePersonnes('6-8')
            ->setDuree('5 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('599.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit3);

        // Circuit 4
        $circuit4 = new Circuits();
        $circuit4->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits nature à Chefchaouen')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-1.jpg')
            ->setVilleDepart('Chefchaouen')
            ->setVilleArrivee('Tangiers')
            ->setNombrePersonnes('3-4')
            ->setDuree('3 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('420.00')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit4);

        // Circuit 5
        $circuit5 = new Circuits();
        $circuit5->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits en montagne à Atlas')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-2.jpg')
            ->setVilleDepart('Marrakech')
            ->setVilleArrivee('Imlil')
            ->setNombrePersonnes('5-7')
            ->setDuree('4 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('499.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit5);

        // Circuit 6
        $circuit6 = new Circuits();
        $circuit6->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits à travers le Rif')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-3.jpg')
            ->setVilleDepart('Tetouan')
            ->setVilleArrivee('Larache')
            ->setNombrePersonnes('4-5')
            ->setDuree('3 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('320.50')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit6);

        // Circuit 7
        $circuit7 = new Circuits();
        $circuit7->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits à travers les gorges de Todra')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-1.jpg')
            ->setVilleDepart('Rissani')
            ->setVilleArrivee('Ouarzazate')
            ->setNombrePersonnes('3-4')
            ->setDuree('2 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('280.75')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit7);

        // Circuit 8
        $circuit8 = new Circuits();
        $circuit8->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits de randonnée dans le Haut Atlas')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-2.jpg')
            ->setVilleDepart('Marrakech')
            ->setVilleArrivee('Imlil')
            ->setNombrePersonnes('6-7')
            ->setDuree('5 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('650.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit8);

        // Circuit 9
        $circuit9 = new Circuits();
        $circuit9->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits de découverte de l\'Oasis de Figuig')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-3.jpg')
            ->setVilleDepart('Figuig')
            ->setVilleArrivee('Errachidia')
            ->setNombrePersonnes('4-5')
            ->setDuree('4 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('540.60')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit9);

        // Circuit 10
        $circuit10 = new Circuits();
        $circuit10->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits à travers le désert de Merzouga')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-1.jpg')
            ->setVilleDepart('Merzouga')
            ->setVilleArrivee('Erfoud')
            ->setNombrePersonnes('5-6')
            ->setDuree('3 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('450.00')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit10);

        // Circuit 11
        $circuit11 = new Circuits();
        $circuit11->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits gastronomiques à Marrakech')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-2.jpg')
            ->setVilleDepart('Marrakech')
            ->setVilleArrivee('Agadir')
            ->setNombrePersonnes('5-7')
            ->setDuree('4 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('599.00')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit11);

        // Circuit 12
        $circuit12 = new Circuits();
        $circuit12->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits en camping sauvage dans le désert')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-3.jpg')
            ->setVilleDepart('Marrakech')
            ->setVilleArrivee('Merzouga')
            ->setNombrePersonnes('3-5')
            ->setDuree('5 jours')
            ->setHebergement('Camping')
            ->setRepas('Inclu')
            ->setPrix('450.99')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit12);

        // Circuit 13
        $circuit13 = new Circuits();
        $circuit13->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits au cœur des montagnes du Rif')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-1.jpg')
            ->setVilleDepart('Chefchaouen')
            ->setVilleArrivee('Tanger')
            ->setNombrePersonnes('6-8')
            ->setDuree('4 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('550.00')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(true);
        $manager->persist($circuit13);

        // Circuit 14
        $circuit14 = new Circuits();
        $circuit14->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits de découverte de l\'Atlas')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-2.jpg')
            ->setVilleDepart('Marrakech')
            ->setVilleArrivee('Imlil')
            ->setNombrePersonnes('4-5')
            ->setDuree('3 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('400.00')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(false);
        $manager->persist($circuit14);

        // Circuit 15
        $circuit15 = new Circuits();
        $circuit15->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits culturels à travers Fès')
            ->setTexteCards('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo.')
            ->setPhotoHeader('photo-header-circuit-3.jpg')
            ->setVilleDepart('Fès')
            ->setVilleArrivee('Meknès')
            ->setNombrePersonnes('3-5')
            ->setDuree('2 jours')
            ->setHebergement('Inclu')
            ->setRepas('Inclu')
            ->setPrix('300.50')
            ->setPhotoJour1('photo-jour-1.jpg')
            ->setTitreJour1('Décription du jour 1')
            ->setTexteJour1('Lorem ipsum dolor sit amet.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet.')
            ->setDisponible(false);
        $manager->persist($circuit15);

        $manager->flush();
    }
}
