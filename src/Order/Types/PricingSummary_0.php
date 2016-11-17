<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Order\Types;

/**
 *
 * @property \DTS\eBaySDK\Order\Types\Adjustment_0 $adjustment
 * @property \DTS\eBaySDK\Order\Types\Amount_0 $deliveryCost
 * @property \DTS\eBaySDK\Order\Types\Amount_0 $deliveryDiscount
 * @property \DTS\eBaySDK\Order\Types\Amount_0 $fee
 * @property \DTS\eBaySDK\Order\Types\Amount_0 $priceDiscount
 * @property \DTS\eBaySDK\Order\Types\Amount_0 $priceSubtotal
 * @property \DTS\eBaySDK\Order\Types\Amount_0 $tax
 * @property \DTS\eBaySDK\Order\Types\Amount_0 $total
 */
class PricingSummary_0 extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'adjustment' => [
            'type' => 'DTS\eBaySDK\Order\Types\Adjustment_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'adjustment'
        ],
        'deliveryCost' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryCost'
        ],
        'deliveryDiscount' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryDiscount'
        ],
        'fee' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fee'
        ],
        'priceDiscount' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceDiscount'
        ],
        'priceSubtotal' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceSubtotal'
        ],
        'tax' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tax'
        ],
        'total' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount_0',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}