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
class changefooter
{
 /**
 * @param \Magento\Theme\Block\Html\Footer $subject
 * @param $result
 * @return string
 */
 public function aftergetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
 {
 return 'Hummingbird';
 }
}