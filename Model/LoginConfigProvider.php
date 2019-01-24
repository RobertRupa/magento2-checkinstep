<?php
namespace Konatsu\LogInStep\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Konatsu\LogInStep\Block\Login\Login;
use Mageplaza\SocialLogin\Block\Popup\Social;

class LoginConfigProvider implements ConfigProviderInterface
{
    protected $login;
    protected $social;

    public function __construct(
        Login $login,
        Social $social
    ) {
        $this->login = $login;
        $this->social = $social;
    }

    public function getConfig()
    {
        $storCode = $this->login->getStoreCode();
        $config = [];
        $config['storCode'] = $storCode;

        return $config;
    }
}
