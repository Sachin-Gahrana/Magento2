<?php
/**
 *
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\US5\Controller\Adminhtml\Action;
use Magento\Framework\Controller\ResultFactory;
/**
* Class Index
* @package Hummingbird\US5\Controller\Adminhtml\Action
*/
class Index extends \Magento\Backend\App\Action
{
 /**
 * execute method
 */
 public function execute()
 {
 $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
 $result->setContents('Hello World!');
 return $result;
 } 
 /**
 * @return int
 */
protected function _isAllowed() {
    $access = $this->getRequest()->getParam('access');
    return isset($access) && (int)$access==1;
    }
    /**
    * @return true
    */
    public function _processUrlKeys() {
    return true;
    }
} 