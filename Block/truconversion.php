<?php
 
namespace TruConversion\TruConversionConnect\Block;
 
class Truconversion extends \Magento\Framework\View\Element\Template
{
    /**
     * Extension config path
     */
    const XML_PATH_TC = 'truconversion_connect/general/';
    
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }
    
    public function getCodeStatus()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_TC . 'active', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    
    public function getDomainId()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_TC . 'truconversion_domain_id', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}