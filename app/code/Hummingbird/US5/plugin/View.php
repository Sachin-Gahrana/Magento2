<?php
/**
 *
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\US5\plugin;
use Magento\Framework\Controller\ResultFactory; 

/**
* Class View
* @package Hummingbird\US5\plugin
*/
class View extends \Magento\Framework\App\Action\Action
{

 /**
 * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
 */
 public function execute()
 {
 return $this->resultFactory->create('raw')->setContents(' echo plugin ');
}

/**
* @param \Magento\Catalog\Controller\Product\View $controller
* @param $result
* @return mixed
*/
public function afterExecute(\Magento\Catalog\Controller\Product\View $controller, $result)
{
    $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
    $result->setContents('Hello world with ResultFactory');
    return $result;
}
} 