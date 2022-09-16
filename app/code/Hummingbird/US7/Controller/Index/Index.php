<?php
/**
 *
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\US7\Controller\Index;
use \Magento\Framework\Controller\ResultFactory;
/**
* Class Index
* @package Hummingbird\US7\Controller\Index
*/
class Index extends \Magento\Framework\App\Action\Action
{
 protected $_pageFactory;
 public function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
    $this->_pageFactory = $pageFactory;
    parent::__construct($context);
    }
    /**
    * return \Magento\Framework\App\ResponseInterface | \Magento\Framework\Controller\ResultInterface
    */
    public function execute()
    {
    return $this->_pageFactory->create();
    
    }
}