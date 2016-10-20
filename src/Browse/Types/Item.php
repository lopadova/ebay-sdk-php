<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Browse\Types;

/**
 *
 * @property string[] $additionalImageUrls
 * @property string $ageGroup
 * @property \DTS\eBaySDK\Browse\Enums\AvailabilityStatusEnum $availabilityStatusForShipToHome
 * @property string $brand
 * @property string $categoryPath
 * @property string $color
 * @property string $condition
 * @property string $description
 * @property string $descriptionInHTML
 * @property string $gender
 * @property string $gtin
 * @property string $imageUrl
 * @property string $itemEndDate
 * @property string $itemId
 * @property \DTS\eBaySDK\Browse\Types\Address $itemLocation
 * @property \DTS\eBaySDK\Browse\Types\TypedNameValue[] $localizedAspects
 * @property \DTS\eBaySDK\Browse\Types\MarketingPrice $marketingPrice
 * @property string $material
 * @property string $mpn
 * @property string $pattern
 * @property \DTS\eBaySDK\Browse\Types\Amount $price
 * @property \DTS\eBaySDK\Browse\Enums\PriceDisplayConditionEnum $priceDisplayCondition
 * @property string $primaryItemGroupHref
 * @property string $primaryItemGroupId
 * @property \DTS\eBaySDK\Browse\Types\ReviewRating $primaryProductReviewRating
 * @property integer $quantityLimitPerBuyer
 * @property integer $quantitySold
 * @property \DTS\eBaySDK\Browse\Types\ItemReturnTerms $returnTerms
 * @property \DTS\eBaySDK\Browse\Types\Seller $seller
 * @property \DTS\eBaySDK\Browse\Types\ShippingOption[] $shippingOptions
 * @property string $size
 * @property string $sizeSystem
 * @property string $sizeType
 * @property string $title
 * @property \DTS\eBaySDK\Browse\Types\ErrorDetailV3[] $warnings
 */
class Item extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalImageUrls' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'additionalImageUrls'
        ],
        'ageGroup' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ageGroup'
        ],
        'availabilityStatusForShipToHome' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'availabilityStatusForShipToHome'
        ],
        'brand' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'brand'
        ],
        'categoryPath' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryPath'
        ],
        'color' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'color'
        ],
        'condition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'condition'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'descriptionInHTML' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'descriptionInHTML'
        ],
        'gender' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'gender'
        ],
        'gtin' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'gtin'
        ],
        'imageUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'imageUrl'
        ],
        'itemEndDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemEndDate'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'itemLocation' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Address',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemLocation'
        ],
        'localizedAspects' => [
            'type' => 'DTS\eBaySDK\Browse\Types\TypedNameValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'localizedAspects'
        ],
        'marketingPrice' => [
            'type' => 'DTS\eBaySDK\Browse\Types\MarketingPrice',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketingPrice'
        ],
        'material' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'material'
        ],
        'mpn' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'mpn'
        ],
        'pattern' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pattern'
        ],
        'price' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'price'
        ],
        'priceDisplayCondition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceDisplayCondition'
        ],
        'primaryItemGroupHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryItemGroupHref'
        ],
        'primaryItemGroupId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryItemGroupId'
        ],
        'primaryProductReviewRating' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ReviewRating',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryProductReviewRating'
        ],
        'quantityLimitPerBuyer' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantityLimitPerBuyer'
        ],
        'quantitySold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantitySold'
        ],
        'returnTerms' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ItemReturnTerms',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnTerms'
        ],
        'seller' => [
            'type' => 'DTS\eBaySDK\Browse\Types\Seller',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ],
        'shippingOptions' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ShippingOption',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingOptions'
        ],
        'size' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'size'
        ],
        'sizeSystem' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sizeSystem'
        ],
        'sizeType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sizeType'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'warnings' => [
            'type' => 'DTS\eBaySDK\Browse\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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
