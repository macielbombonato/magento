<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\GroupedProduct\Test\Fixture\GroupedProduct;

/**
 * Class CheckoutData
 * Data for fill product form on frontend
 *
 * Data keys:
 *  - preset (Checkout data verification preset name)
 */
class CheckoutData extends \Magento\Catalog\Test\Fixture\CatalogProductSimple\CheckoutData
{
    /**
     * Get preset array
     *
     * @param $name
     * @return array|null
     */
    protected function getPreset($name)
    {
        $presets = [
            'three_simple_products' => [
                'options' => [
                    [
                        'name' => 'product_key_0',
                        'qty' => 3,
                    ],
                    [
                        'name' => 'product_key_1',
                        'qty' => 1
                    ],
                    [
                        'name' => 'product_key_2',
                        'qty' => 2
                    ],
                ],
                'cartItem' => [
                    'price' => [
                        'product_key_0' => 560,
                        'product_key_1' => 40,
                        'product_key_2' => 100,
                    ],
                    'qty' => [
                        'product_key_0' => 3,
                        'product_key_1' => 1,
                        'product_key_2' => 2,
                    ],
                    'subtotal' => [
                        'product_key_0' => 1680,
                        'product_key_1' => 40,
                        'product_key_2' => 200,
                    ],
                ],
            ],
            'three_simple_products_default_qty' => [
                'options' => [
                    [
                        'name' => 'product_key_0',
                        'qty' => 17,
                    ],
                    [
                        'name' => 'product_key_1',
                        'qty' => 36
                    ],
                    [
                        'name' => 'product_key_2',
                        'qty' => 20
                    ],
                ],
                'cartItem' => [
                    'price' => [
                        'product_key_0' => 560,
                        'product_key_1' => 40,
                        'product_key_2' => 100,
                    ],
                    'qty' => [
                        'product_key_0' => 17,
                        'product_key_1' => 36,
                        'product_key_2' => 20,
                    ],
                    'subtotal' => [
                        'product_key_0' => 9520.00,
                        'product_key_1' => 1440.00,
                        'product_key_2' => 2000.00,
                    ],
                ],
            ],
        ];
        return isset($presets[$name]) ? $presets[$name] : null;
    }
}
