<?php
/**
 *
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\US2\Plugin;
/**
* Class changefooter
* @package Unit1\Plugins\Plugin
*/
class changeheader
{
 /**
 * @param \Magento\Theme\Block\Html\Header $subject
 * @param $result
 * @return string
 */
 public function aftergetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
 {
     return 'Welcome Hummingbird';
 }
}