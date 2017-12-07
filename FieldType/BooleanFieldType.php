<?php


namespace DigipolisGent\SettingBundle\FieldType;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

/**
 * Class BooleanFieldType
 * @package DigipolisGent\SettingBundle\FieldType
 */
class BooleanFieldType implements FieldTypeInterface
{

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'boolean';
    }

    /**
     * @return string
     */
    public function getFormType(): string
    {
        return CheckboxType::class;
    }

    /**
     * @param $value
     * @return array
     */
    public function getOptions($value): array
    {
        $options = [];

        if ($value) {
            $options['attr']['checked'] = 'checked';
        }

        return $options;
    }

    /**
     * @param $value
     * @return string
     */
    public function encodeValue($value): string
    {
        return $value;
    }
}