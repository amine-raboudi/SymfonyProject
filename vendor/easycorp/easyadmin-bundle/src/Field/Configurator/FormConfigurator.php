<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Field\Configurator;

use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldConfiguratorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\FieldDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\EaFormRowType;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FormConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto $field, EntityDto $entityDto): bool
    {
        return FormField::class === $field->getFieldFqcn();
    }

    public function configure(FieldDto $field, EntityDto $entityDto, AdminContext $context): void
    {
        // if label is NULL, its value is autogenerated from the property name.
        // But property names don't make sense for this kind of special field, so
        // make the label FALSE to not display it
        if (null === $field->getLabel()) {
            $field->setLabel(false);
        }

        if (EaFormRowType::class === $field->getFormType()) {
            $breakpointName = $field->getCustomOption(FormField::OPTION_ROW_BREAKPOINT);
            if ('' === $breakpointName) {
                // this empty string is "the name" used for XS size, when no real breakpoint is applied
                $cssClasses = 'flex-fill';
            } else {
                $cssClasses = sprintf('d-none d-%s-flex flex-%s-fill', $breakpointName, $breakpointName);
            }

            $field->setFormTypeOption('row_attr.class', $field->getFormTypeOption('row_attr.class').' '.$cssClasses);
        }
    }
}