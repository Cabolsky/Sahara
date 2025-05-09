<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(), 
            TextField::new('titre'), 
            TextField::new('description'), 
            ImageField::new('photo') 
                ->setBasePath('/uploads')  // Remplacez /assets/image par /uploads
                ->setUploadDir('public/uploads') // Remplacez public/assets/image par public/uploads
                ->setRequired(false) 
                ->setHelp('Dimensions : 1100px x 600px')
                ->setFormTypeOptions(['allow_file_upload' => true]) // Ajout de l'option pour le fichier
        ];
    }
}
