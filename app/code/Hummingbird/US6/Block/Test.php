<?php
/**
 *
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\US6\Block;
/**
* Class Test
* @package Hummingbird\US6\Block
*/
class Test extends \Magento\Framework\View\Element\AbstractBlock
{
 /**
 * @return string
 */
 protected function _toHtml()
 {
 return "<b>Hello world from the block!</b>";
 }
} 