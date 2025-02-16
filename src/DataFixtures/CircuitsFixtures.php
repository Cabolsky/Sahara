<?php

namespace App\DataFixtures;

use App\Entity\Circuits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CircuitsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $circuit1 = new Circuits();
        $circuit1->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits dessert Agadir')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit1);

        $circuit2 = new Circuits();
        $circuit2->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits dessert Marrakech')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud..')
            ->setDisponible(true);
        $manager->persist($circuit2);

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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit3);

        $circuit4 = new Circuits();
        $circuit4->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits dessert Chefchaouen')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit4);

        $circuit5 = new Circuits();
        $circuit5->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits dessert Atlas')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit5);

        $circuit6 = new Circuits();
        $circuit6->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits dessert le Rif')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit6);

        $circuit7 = new Circuits();
        $circuit7->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits dessert de Todra')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit7);

        $circuit8 = new Circuits();
        $circuit8->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits dessert Haut Atlas')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit8);

        $circuit9 = new Circuits();
        $circuit9->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits dessert de Figuig')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit9);

        $circuit10 = new Circuits();
        $circuit10->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits dessert Merzouga')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit10);

        $circuit11 = new Circuits();
        $circuit11->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits dessert Marrakech')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit11);

        // Circuit 12
        $circuit12 = new Circuits();
        $circuit12->setPhotoCards('card-circuit-3.jpg')
            ->setTitreCards('Circuits dessert sauvage')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit12);

        $circuit13 = new Circuits();
        $circuit13->setPhotoCards('card-circuit-1.jpg')
            ->setTitreCards('Circuits dessert du Rif')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(true);
        $manager->persist($circuit13);

        $circuit14 = new Circuits();
        $circuit14->setPhotoCards('card-circuit-2.jpg')
            ->setTitreCards('Circuits dessert Atlas')
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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(false);
        $manager->persist($circuit14);

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
            ->setTexteJour1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour2('photo-jour-2.jpg')
            ->setTitreJour2('Décription du jour 2')
            ->setTexteJour2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setPhotoJour3('photo-jour-3.jpg')
            ->setTitreJour3('Décription du jour 3')
            ->setTexteJour3('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.')
            ->setDisponible(false);
        $manager->persist($circuit15);

        $manager->flush();
    }
}
