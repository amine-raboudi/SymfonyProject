<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Query\AST\SelectClause;
use Doctrine\ORM\Query\Expr\Select;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\PasswordHasherAdapter;
use Symfony\Component\Security\Core\Encoder\PasswordHasherEncoder;
use Symfony\Config\Security\PasswordHasherConfig;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('email'),
            IntegerField::new('age'),
            TextField::new('pays'),
            TextField::new('Password', )
                ->setFormType(PasswordType::class)
                ->onlyOnForms()
        ];
    }

}
