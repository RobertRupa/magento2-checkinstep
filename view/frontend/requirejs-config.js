/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    'config': {
        'mixins': {
            'Magento_Checkout/js/view/shipping': {
               'Konatsu_LogInStep/js/view/shipping-payment-mixin': true
                },
            'Magento_Checkout/js/view/payment': {
                'Konatsu_LogInStep/js/view/shipping-payment-mixin': true
                },
            'Magento_Checkout/js/model/step-navigator': {
               'Konatsu_LogInStep/js/mixin/navigator-mixin': true
                }
        }
    },
    'map': {
        '*': {
        }
    }
};
