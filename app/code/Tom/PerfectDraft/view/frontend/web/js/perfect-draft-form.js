define([
    'jquery',
    'Magento_Ui/js/modal/alert'
], function ($, alert) {
    'use strict';

    return function (config) {
        let formSelector = '#perfect-draft-form';

        $(formSelector).on('submit', function (e) {
            e.preventDefault();

            // Display accessible dialog
            alert({
                title: $.mage.__('Success'),
                content: $.mage.__('Info received'),
                actions: {
                    always: function () {}
                },
                buttons: [{
                    text: $.mage.__('OK'),
                    class: 'action primary accept',
                    click: function () {
                        this.closeModal(true);
                    }
                }]
            });

            return false;
        });
    };
});
