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
        $contact->setAdresse('823 Secteur 020132, Lot Yasmine APT 07 ETG 2');
        $contact->setVille('40000 Marrakech');
        $contact->setPays('Maroc');
        $contact->setTelephone('+33 6 82 26 00 36');
        $contact->setTelephoneMarocain('+212 6 66 81 28 24');
        $contact->setMessagerie('escapadesahara@gmail.com');


        $manager->persist($contact);
        $manager->flush();
    }
}
