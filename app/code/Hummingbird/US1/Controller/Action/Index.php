<?php

namespace Hummingbird\US1\Controller\Action;

use \Hummingbird\US1\Humage\Test;

class Index extends \Magento\Framework\App\Action\Action{
    protected $_pageFactory;
    private $test;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        Test $test
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->test = $test;
        return parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
        $result->setContents($this->test->displayParams());
        return $result;
    }
}