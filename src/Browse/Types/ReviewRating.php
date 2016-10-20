<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Browse\Types;

/**
 *
 * @property string $averageRating
 * @property \DTS\eBaySDK\Browse\Types\RatingHistogram[] $ratingHistograms
 * @property integer $reviewCount
 */
class ReviewRating extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'averageRating' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'averageRating'
        ],
        'ratingHistograms' => [
            'type' => 'DTS\eBaySDK\Browse\Types\RatingHistogram',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ratingHistograms'
        ],
        'reviewCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reviewCount'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://davidtsadler.com"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
