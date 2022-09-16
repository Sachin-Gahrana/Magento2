<?php
/**
 *
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\US2\Plugin;
/**
* Class AfterPricePlugin
* @package Hummingbird\US2\Plugin;
*/
class Plugin1
{
 /**
 * @param \Magento\Catalog\Model\Product $subject
 * @param $result
 * @return mixed
 */
 public function aftergetName(\Magento\Catalog\Model\Product $subject, $result)
 {
    $price = $subject->getPrice();
    if($price < 60)
    {
        return $result. " On Sale!";
    }

}
}