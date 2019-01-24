define([
    'jquery',
    'ko',
    'uiComponent',
    'underscore',
    'Magento_Checkout/js/model/step-navigator',
    'Magento_Customer/js/customer-data',
    'Magento_Customer/js/model/customer',
    'mage/translate',
    'socialProvider'
], function ($, ko, Component, _, stepNavigator, customerData, customer, $t, socialProvider) {
    'use strict';

    ko.bindingHandlers.socialButton = {
        init: function (element, valueAccessor, allBindings) {
            var config = {
                url: allBindings.get('url'),
                label: allBindings.get('label')
            };
            socialProvider(config, element);
        }
    };

    return Component.extend({
        defaults: {
            template: 'Konatsu_LogInStep/email'
        },
        buttonLists: window.socialAuthenticationPopup,

        socials: function () {
            var socials = [];
            $.each(this.buttonLists, function (key, social) {
                social['full_label'] = $t("Sign in with ") + social['label'];
                socials.push(social);
            });
            return socials;
        },
        isActive: function () {
            return (typeof this.buttonLists !== 'undefined');
        },

        createAccountUrl: function () {
            var storCode = window.checkoutConfig.storCode;
            return "/" + storCode + "/customer/account/create/";
        },

        getAdviceTitle: function () {
            var adviceTitle = window.checkoutConfig.adviceTitle;
            return adviceTitle;
        },

        getAdviceContent: function () {
            var adviceTitle = window.checkoutConfig.adviceContent;
            return adviceTitle;
        },

        loginFormSelector: 'form[data-role=email-with-possible-login]',

        isVisible: ko.observable(!customer.isLoggedIn()),

        initialize: function () {
            this._super();
            stepNavigator.registerStep(
                'email',
                null,
                $t('Email'),
                this.isVisible,
                _.bind(this.navigate, this),
                5
            );
            return this;
        },

        navigate: function () {console.log('test');
            if (customer.isLoggedIn()) {
                this.navigateToNextStep();
            } else {
                this.isVisible(true);
            }
        },

        validateEmail: function () {
            var emailValidationResult = customer.isLoggedIn();

            if (!customer.isLoggedIn()) {
                $(this.loginFormSelector).validation();
                emailValidationResult = Boolean($(this.loginFormSelector + ' input[name=username]').valid());
            }
            return emailValidationResult;
        },

        navigateToNextStep: function () {
            if (this.validateEmail()) {
                stepNavigator.next();
                $('aside').show();
                $('#checkout .opc-wrapper').css('width', '66.66666667%');
                $('#checkout .opc-wrapper').css('padding', '0px');
            } else {
                $(this.loginFormSelector + ' input[name=username]').focus();
            }
        }
    });
});