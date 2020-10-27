<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_CustomerAttributesGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

declare(strict_types=1);

namespace Mageplaza\CustomerAttributesGraphQl\Model\Resolver\FilterArgument;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\ConfigInterface;
use Magento\Framework\GraphQl\Query\Resolver\Argument\FieldEntityAttributesInterface;
use Mageplaza\CustomerAttributes\Helper\Data;

/**
 * Class Attributes
 * @package Mageplaza\CustomerAttributesGraphQl\Model\Resolver\FilterArgument
 */
class Attributes implements FieldEntityAttributesInterface
{
    /**
     * @var ConfigInterface
     */
    private $config;

    /**
     * @var Data
     */
    protected $helperData;

    /**
     * OrderAttributes constructor.
     *
     * @param ConfigInterface $config
     * @param Data $helperData
     */
    public function __construct(
        ConfigInterface $config,
        Data $helperData
    ) {
        $this->config     = $config;
        $this->helperData = $helperData;
    }

    /**
     * @return array
     */
    public function getEntityAttributes(): array
    {
        $fields = [];

        /** @var Field $field */
        foreach ($this->config->getConfigElement('MpAttributes')->getFields() as $field) {
            $fieldName          = $field->getName();
            $fields[$fieldName] = ['fieldName' => $fieldName];
        }

        return $this->helperData->versionCompare('2.3.4') ? $fields : array_keys($fields);
    }
}
