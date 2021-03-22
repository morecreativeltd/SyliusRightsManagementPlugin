<?php

declare(strict_types=1);

namespace BeHappy\SyliusRightsManagementPlugin\Form\Extension;

use BeHappy\SyliusRightsManagementPlugin\Entity\Group;
use Sylius\Bundle\CoreBundle\Form\Type\User\AdminUserType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class AdminUserTypeExtension
 *
 * @package BeHappy\SyliusRightsManagementPlugin\Form\Extension
 */
class AdminUserTypeExtension extends AbstractTypeExtension
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('group', EntityType::class, [
                'class' => Group::class
            ])
        ;
    }

    /**
     * Returns the name of the type being extended.
     *
     * @return iterable
     */
    public static function getExtendedTypes(): iterable
    {
        return [AdminUserType::class];
    }
}
