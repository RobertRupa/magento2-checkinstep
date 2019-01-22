<?php

namespace Konatsu\CheckInStep\Plugin\Block\Checkout;

use Magento\Checkout\Block\Checkout\LayoutProcessor;

class LayoutProcessorPlugin
{
    public function afterProcess(LayoutProcessor $subject, $jsLayout)
    {
    //    $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['sortOrder'] = "2";
     //   $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['sortOrder'] = "3";
      //  $jsLayout['components']['checkout']['children']['steps']['children']['checkin-step']['sortOrder'] = "1";

        //$jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['sortOrder'] = 3;


        // /* config: checkout/options/display_billing_address_on = payment_method */
        // if (isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //     ['payment']['children']['payments-list']['children']
        // )) {

        //     foreach ($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //              ['payment']['children']['payments-list']['children'] as $key => $payment) {

        //         /* company */
        //         if (isset($payment['children']['form-fields']['children']['company'])) {

        //             $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //             ['payment']['children']['payments-list']['children'][$key]['children']['form-fields']['children']
        //             ['company']['sortOrder'] = 0;
        //         }

        //         /* region & region_id */
        //         if (isset($payment['children']['form-fields']['children']['region'])) {

        //             $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //             ['payment']['children']['payments-list']['children'][$key]['children']['form-fields']['children']
        //             ['region']['visible'] = false;

        //             $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //             ['payment']['children']['payments-list']['children'][$key]['children']['form-fields']['children']
        //             ['region']['config']['componentDisabled'] = true;
        //         }
        //         if (isset($payment['children']['form-fields']['children']['region_id'])) {

        //             $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //             ['payment']['children']['payments-list']['children'][$key]['children']['form-fields']['children']
        //             ['region_id']['visible'] = false;

        //             $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //             ['payment']['children']['payments-list']['children'][$key]['children']['form-fields']['children']
        //             ['region_id']['config']['componentDisabled'] = true;
        //         }

        //         $method = substr($key, 0, -5);

        //         /* vat_id */
        //         $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //         ['payment']['children']['payments-list']['children'][$key]['children']['form-fields']['children']
        //         ['vat_id'] = [
        //             'component' => 'Magento_Ui/js/form/element/abstract',
        //             'config' => [
        //                 'customScope' => 'billingAddress' . $method,
        //                 'customEntry' => null,
        //                 'template' => 'ui/form/field',
        //                 'elementTmpl' => 'ui/form/element/input',
        //                 'tooltip' => null,
        //             ],
        //             'dataScope' => 'billingAddress' . $method . '.vat_id',
        //             'dataScopePrefix' => 'billingAddress' . $method,
        //             'label' => __('VAT number'),
        //             'provider' => 'checkoutProvider',
        //             'sortOrder' => 1,
        //             'validation' => [],
        //             'options' => [],
        //             'filterBy' => null,
        //             'customEntry' => null,
        //             'visible' => true,
        //         ];
        //     }
        // }

        // /* config: checkout/options/display_billing_address_on = payment_page */
        // if (isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //     ['payment']['children']['afterMethods']['children']['billing-address-form']
        // )) {

        //     /* company */
        //     if (isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //         ['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']
        //         ['children']['company']
        //     )) {
        //         $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //         ['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']
        //         ['children']['company']['sortOrder'] = 0;
        //     }

        //     /* region & region_id */
        //     if (isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //         ['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']
        //         ['children']['region'])) {

        //         $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //         ['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']
        //         ['children']['region']['visible'] = false;

        //         $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //         ['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']
        //         ['children']['region']['config']['componentDisabled'] = true;
        //     }
        //     if (isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //         ['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']
        //         ['children']['region_id'])) {

        //         $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //         ['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']
        //         ['children']['region_id']['visible'] = false;

        //         $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //         ['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']
        //         ['children']['region_id']['config']['componentDisabled'] = true;
        //     }

        //     $method = 'shared';

        //     /* vat_id */
        //     $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
        //     ['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']
        //     ['children']['vat_id'] = [
        //         'component' => 'Magento_Ui/js/form/element/abstract',
        //         'config' => [
        //             'customScope' => 'billingAddress' . $method,
        //             'customEntry' => null,
        //             'template' => 'ui/form/field',
        //             'elementTmpl' => 'ui/form/element/input',
        //             'tooltip' => null,
        //         ],
        //         'dataScope' => 'billingAddress' . $method . '.vat_id',
        //         'dataScopePrefix' => 'billingAddress' . $method,
        //         'label' => __('VAT number'),
        //         'provider' => 'checkoutProvider',
        //         'sortOrder' => 1,
        //         'validation' => [],
        //         'options' => [],
        //         'filterBy' => null,
        //         'customEntry' => null,
        //         'visible' => true,
        //     ];
        // }

        return $jsLayout;
    }
}