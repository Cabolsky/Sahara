<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contact = new Contact();
        $contact->setAdresse('123 Avenue de la Forêt, 40140 Soustons');
        $contact->setTelephone('+33 6 12 34 56 78');
        $contact->setMessagerie('contact@sahara.fr');

        $manager->persist($contact);
        $manager->flush();
    }
}
