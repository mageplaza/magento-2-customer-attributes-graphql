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

namespace Mageplaza\CustomerAttributesGraphQl\Model\Resolver\Attribute;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\Resolver\Argument\SearchCriteria\Builder as SearchCriteriaBuilder;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Mageplaza\CustomerAttributes\Model\CustomerMetadata;
use \Mageplaza\CustomerAttributesGraphQl\Model\Resolver\AbstractAttributes;

/**
 * Class CustomerAttributes
 * @package Mageplaza\CustomerAttributesGraphQl\Model\Resolver\Attribute
 */
class CustomerAttributes extends AbstractAttributes
{
    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * @var CustomerMetadata
     */
    protected $customerAttributeMetadata;

    /**
     * Attributes constructor.
     *
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param CustomerMetadata $customerAttributeMetadata
     */
    public function __construct(
        SearchCriteriaBuilder $searchCriteriaBuilder,
        CustomerMetadata $customerAttributeMetadata
    ) {
        $this->searchCriteriaBuilder     = $searchCriteriaBuilder;
        $this->customerAttributeMetadata = $customerAttributeMetadata;
    }

    /**
     * @inheritdoc
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        $this->validate($args);
        $searchCriteria = $this->searchCriteriaBuilder->build('mp_customer_attributes', $args);
        $searchCriteria->setCurrentPage($args['currentPage']);
        $searchCriteria->setPageSize($args['pageSize']);
        $searchResult = $this->customerAttributeMetadata->getAllAttributes($searchCriteria);

        return $this->getResult($searchResult, $args);
    }
}
