<?php
/**
 *
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\US6\Plugin;
/**
* Class Description
* @package Hummingbird\US6\Plugin
*/
class Description extends \Magento\Framework\View\Element\Template
{
 /**
 * @param \Magento\Catalog\Block\Product\View\Description $description
 */
 public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $description)
 {
 $description->getProduct()->setDescription('sample description!');
 }
}