define([
    'jquery',
    'Magento_Ui/js/modal/modal'
], function ($, modal) {
    'use strict';

    return function (config) {
        var options = {
            type: 'popup',
            responsive: true,
            innerScroll: true,
            title: 'Form Submission',
            buttons: [{
                text: $.mage.__('Close'),
                class: 'action primary',
                click: function () {
                    this.closeModal();
                }
            }],
            modalClass: 'custom-form-dialog',
            keyEventHandlers: {
                escapeKey: function () {
                    this.closeModal();
                }
            }
        };

        // Create dialog content
        var dialogContent = $('<div></div>')
            .addClass('dialog-content')
            .attr('role', 'alert')
            .attr('aria-live', 'assertive')
            .html('<p>Info received</p>');

        // Create dialog container
        var dialogContainer = $('<div></div>')
            .attr('id', 'form-dialog')
            .append(dialogContent);

        // Add dialog container to the page
        $('body').append(dialogContainer);

        // Initialize modal dialog
        var popup = modal(options, dialogContainer);

        // Handle form submission
        $('#custom-form').on('submit', function (e) {
            e.preventDefault();
            dialogContainer.modal('openModal');
            return false;
        });
    };
});
