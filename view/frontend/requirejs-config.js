/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    'config': {
        'mixins': {
            'Magento_Checkout/js/view/shipping': {
               'Konatsu_CheckInStep/js/view/shipping-payment-mixin': true
               },
            'Magento_Checkout/js/view/payment': {
                'Konatsu_CheckInStep/js/view/shipping-payment-mixin': true
               }
        }
    },
    'map': {
        '*': {
            //'Magento_Checkout/js/view/shipping' :
            //   'Konatsu_CheckInStep/js/view/shipping',
            'Magento_Checkout/js/model/step-navigator' :
                'Konatsu_CheckInStep/js/model/step-navigator',
        }
    }
};
