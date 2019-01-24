<?php

namespace Konatsu\LogInStep\Block\Login;

use Magento\Customer\Block\Form\Login as OrginalLogin;
use Mageplaza\SocialLogin\Block\Popup\Social;
use Konatsu\LogInStep\Model\Advice;
 
class Login extends \Magento\Framework\View\Element\Template
{
    /**
     * @var OrginalLogin
     */
    public $login;
    /**
     * @var Social
     */
    public $social;

    /**
     * @var Advice
     */
    private $advice;

    protected const CONFIG_PATH = "loginstep/general";

    /**
     * Data constructor.
     * @param OrginalLogin $login
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        OrginalLogin $login,
        Social $social,
        Advice $advice,
        array $data = [])
    {
        $this->login = $login;
        $this->social = $social;
        $this->advice = $advice;
        parent::__construct($context, $data);
    }
    
    public function getStoreCode()
    {
        return $this->_storeManager->getStore()->getCode();;
    }

    public function getAdvice()
    {
        $this->advice->setTitle($this->getProperty($this::CONFIG_PATH.'/title'));
        $this->advice->setContent($this->getProperty($this::CONFIG_PATH.'/content'));
        return $this->advice;
    }

    private function getProperty($prop) 
    {
        return $this->_scopeConfig->getValue($prop, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    private function filterOutputHtml($string) 
    {
        return $this->filterProvider->getPageFilter()->filter($string);
    }

}
