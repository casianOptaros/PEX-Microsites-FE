<?php
/**
 * PartyLite_Microsites
 *
 * @category    PartyLite
 * @package     PartyLite_Microsites
 * @copyright   Copyright (c) 2018 Optaros
 * @author      Casian Daniel Suciu <dsuciu@optaros.com>
 */

namespace PartyLite\Microsites\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }

}