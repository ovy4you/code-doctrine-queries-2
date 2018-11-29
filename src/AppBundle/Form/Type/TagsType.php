<?php
namespace AppBundle\Form\Type;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;

class TagsType extends AbstractType
{

    public function getParent()
    {
        return TextType::class;
    }

    public function getName(){

    }
}