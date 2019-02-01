<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\commerce\models;

use Craft;
use craft\commerce\base\Model;
use craft\i18n\Locale;

/**
 * Class Lite Settings
 *
 * @property-read string $taxRateAsPercent
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 2.0
 *
 */
class LiteSettings extends Model
{
    // Properties
    // =========================================================================

    /**
     * @var float Shipping base rate
     */
    public $shippingBaseRate;

    /**
     * @var float Shipping per item rate
     */
    public $shippingPerItemRate;

    /**
     * @var float Tax rate
     */
    public $taxRate;

    /**
     * @var string Tax name
     */
    public $taxName;

    /**
     * @var string Tax include
     */
    public $taxInclude;

    /**
     * @return array|string[]
     */
    public function safeAttributes(): array
    {
        return [
            'taxRate',
            'taxName',
            'taxInclude',
            'shippingBaseRate',
            'shippingPerItemRate'
        ];
    }

    /**
     * @return string
     */
    public function getTaxRateAsPercent(): string
    {
        $percentSign = Craft::$app->getLocale()->getNumberSymbol(Locale::SYMBOL_PERCENT);

        return $this->taxRate * 100 . '' . $percentSign;
    }
}