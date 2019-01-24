<?php
namespace Konatsu\LogInStep\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Konatsu\LogInStep\Block\Login\Login;

class AdviceConfigProvider implements ConfigProviderInterface
{       
    protected $login;
    protected $social;

    public function __construct(
        Login $login
    ) {
        $this->login = $login;
    }
    public function getConfig()
    {
        $advice = $this->login->getAdvice();
        $config = [];
        $config['adviceTitle'] = $advice->getTitle();
        $config['adviceContent'] = $advice->getContent();

        return $config;
    }
}
