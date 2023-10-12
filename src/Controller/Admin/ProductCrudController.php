<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }


    public function configureFields(string $pageName): iterable
    {
        $storePath = $this->getParameter('app.path.product_images');
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            ImageField::new('image')->hideOnForm()->setBasePath($storePath),
            TextField::new('imageFile')
                ->onlyOnForms()
                ->setFormType(VichImageType::class),

                //change after this line
//                ->setBasePath($storePath)
//                ->setUploadDir("public$storePath")
//                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]'),
            TextEditorField::new('description'),
            AssociationField::new('offers'),

        ];
    }


}
