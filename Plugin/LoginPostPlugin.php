<?php

namespace Konatsu\CheckInStep\Plugin;

class LoginPostPlugin
{

    /**
     * 
     * @param \Magento\Customer\Controller\Account\LoginPost $subject
     * @param \Magento\Framework\Controller\Result\Redirect $result
     */
    public function afterExecute(
        \Magento\Customer\Controller\Account\LoginPost $subject,
        $result)
    {
        $result->setPath("checkout/");
        return $result;
    }
}