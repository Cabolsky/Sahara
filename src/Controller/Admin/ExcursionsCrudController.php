<?php

namespace App\Controller\Admin;

use App\Entity\Excursions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use Symfony\Component\String\Slugger\SluggerInterface;

class ExcursionsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Excursions::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('titreCards'),
            TextField::new('texteCards'),
            ImageField::new('photoCards')
                ->setBasePath('/uploads')  // Changement du chemin
                ->setUploadDir('public/uploads')  // Changement du répertoire de destination
                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]')
                ->setHelp('Dimensions : 640px x 500px')
                ->setRequired(false)
                ->setFormTypeOptions(['allow_file_upload' => true]),  // Option pour permettre l'upload du fichier
            ImageField::new('photoHeader')
                ->setBasePath('/uploads')  // Changement du chemin
                ->setUploadDir('public/uploads')  // Changement du répertoire de destination
                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]')
                ->setHelp('Dimensions : 1920px x 600px')
                ->setRequired(false)
                ->setFormTypeOptions(['allow_file_upload' => true]),  // Option pour permettre l'upload du fichier
            ImageField::new('photoJour1')
                ->setBasePath('/uploads')  // Changement du chemin
                ->setUploadDir('public/uploads')  // Changement du répertoire de destination
                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]')
                ->setHelp('Dimensions : 1100px x 600px')
                ->setRequired(false)
                ->setFormTypeOptions(['allow_file_upload' => true]),  // Option pour permettre l'upload du fichier
            TextField::new('villeDepart'),
            TextField::new('villeArrivee'),
            TextField::new('nombrePersonnes'),
            TextField::new('duree'),
            TextField::new('hebergement'),
            TextField::new('repas'),
            TextField::new('prix'), 
            TextField::new('titreJour1'),
            TextField::new('texteJour1'),
        ];
    }
}
