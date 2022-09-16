<?php
/**
 *
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\US3\Observer;

use \Magento\Catalog\Model\Product;
//use \Magento\Framework\Registry;
/**
* Class Log
* @package Hummingbird\US3\Observer
*/
class Log implements \Magento\Framework\Event\ObserverInterface
{
 /**
 * @var \Psr\Log\LoggerInterface
 */
 private $_logger;
 private $_registry;
 /**
 * @var \Magento\Framework\App\RequestInterface
 */
 private $_request;
 /**
  * * Log constructor.
 * @param \Psr\Log\LoggerInterface $logger
 * @param \Magento\Framework\App\RequestInterface $request
 */
 public function __construct(
    \Psr\Log\LoggerInterface $logger,
    // \Magento\Framework\App\RequestInterface $request,
     \Magento\Framework\Registry $registry
    )
    {
    $this->_logger = $logger;
    //$this->_request = $request;
    $this->_registry = $registry;
    }
    /**
    * @param \Magento\Framework\Event\Observer $observer
    */
    public function execute(\Magento\Framework\Event\Observer $observer) {
        // $product = $observer->getData("product");
        // $his->_logger->critical($product->getName());
        $product_name=$this->getcurrentproduct();

    $this->_logger->critical(
    // 'Request Name: ' . $this->_registry->getPathInfo()
    "Product Name ". $product_name->getName()
    );
    }
    public function getcurrentproduct()
    {
        return $this->_registry->registry('product');
    }
}