jQuery( function( $ ) {
    'use strict';
    $(function () {
        if (typeof psb_manager === 'undefined') {
            return false;
        }

        var selector = '.psb_' + psb_manager.page;
        if ($('.variations_form').length) {
            $('.variations_form').on('show_variation', function () {
                $(selector).show();
            }).on('hide_variation', function () {
                $(selector).hide();
            });
        }
        $.psb_scroll_to_notices = function (scrollElement) {
            if (scrollElement.length) {
                $('html, body').animate({
                    scrollTop: (scrollElement.offset().top - 100)
                }, 1000);
            }
        };
        var showError = function (errorMessage, selector) {
            var $container = $('.woocommerce-notices-wrapper');
            if (!$container || !$container.length) {
                $(selector).prepend(errorMessage);
                return;
            } else {
                $container = $container.first();
            }
            $('.woocommerce-NoticeGroup-checkout, .woocommerce-error, .woocommerce-message').remove();
            $container.prepend('<div class="woocommerce-NoticeGroup woocommerce-NoticeGroup-checkout">' + errorMessage + '</div>');
            $container.find('.input-text, select, input:checkbox').trigger('validate').blur();
            $.psb_scroll_to_notices($('.woocommerce'));
            $(document.body).trigger('checkout_error');
        };
        var is_from_checkout = 'checkout' === psb_manager.page;
        var is_from_product = 'product' === psb_manager.page;
        var is_sale = 'capture' === psb_manager.paymentaction;

        var smart_button_render = function () {

            $(selector).each(function (i, obj) {

                if ($(obj).children().length) {
                    return;
                }
                if (typeof paypal === 'undefined') {
                    return false;
                }
                var psb_style = {
                    layout: psb_manager.style_layout,
                    color: psb_manager.style_color,
                    shape: psb_manager.style_shape,
                    label: psb_manager.style_label
                };
                if (psb_manager.style_layout !== 'vertical') {
                    psb_style['tagline'] = (psb_manager.style_tagline === 'yes') ? true : false;
                }
                paypal.Buttons({
                    style: psb_style,
                    createOrder: function (data, actions) {
                        var data;
                        if (is_from_checkout) {
                            data = $(selector).closest('form').serialize();
                        } else if (is_from_product) {
                            var add_to_cart = $("[name='add-to-cart']").val();
                            $('<input>', {
                                type: 'hidden',
                                name: 'psb-add-to-cart',
                                value: add_to_cart
                            }).appendTo('form.cart');
                            data = $('form.cart').serialize();
                        } else {
                            data = $('form.woocommerce-cart-form').serialize();
                        }
                        return fetch(psb_manager.create_order_url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: data
                        }).then(function (res) {
                            return res.json();
                        }).then(function (data) {
                            if (typeof data.success !== 'undefined') {
                                var messages = data.data.messages ? data.data.messages : data.data;
                                if ('string' === typeof messages) {
                                    showError('<ul class="woocommerce-error" role="alert">' + messages + '</ul>', $('form'));
                                } else {
                                    var messageItems = messages.map(function (message) {
                                        return '<li>' + message + '</li>';
                                    }).join('');
                                    showError('<ul class="woocommerce-error" role="alert">' + messageItems + '</ul>', $('form'));
                                }
                                return null;
                            } else {
                                return data.orderID;
                            }
                        });
                    },
                    onApprove: function (data, actions) {
                        $('.woocommerce').block({message: null, overlayCSS: {background: '#fff', opacity: 0.6}});
                        if (is_from_checkout) {
                            $.post(psb_manager.cc_capture + "&paypal_order_id=" + data.orderID + "&woocommerce-process-checkout-nonce=" + psb_manager.woocommerce_process_checkout, function (data) {
                                window.location.href = data.data.redirect;
                            });
                        } else {
                            actions.redirect(psb_manager.checkout_url + '?paypal_order_id=' + data.orderID + '&paypal_payer_id=' + data.payerID + '&from=' + psb_manager.page);
                        }
                    },
                    onCancel: function (data, actions) {
                        $('.woocommerce').unblock();
                        if (is_from_checkout === false) {
                            window.location.href = window.location.href;
                        }
                    },
                    onError: function (err) {
                        console.log(err);
                        $('.woocommerce').unblock();
                        if (is_from_checkout === false) {
                            window.location.href = window.location.href;
                        }
                    }
                }).render(obj);

            });



        };



        $('form.checkout').on('checkout_place_order_paypal_smart_checkout', function (event) {
            if (is_psb_selected()) {
                if (is_hosted_field_eligible() === true) {
                    event.preventDefault();
                    if ($('form.checkout').is('.paypal_cc_submiting')) {
                        return false;
                    } else {
                        $('form.checkout').addClass('paypal_cc_submiting');
                        $(document.body).trigger('submit_paypal_cc_form');
                    }
                    return false;
                }
            }
            return true;
        });
        var hosted_button_render = function () {
            if ($('form.checkout').is('.HostedFields')) {
                return false;
            }
            if (typeof paypal === 'undefined') {
                return false;
            }
            $('form.checkout').addClass('HostedFields');
            paypal.HostedFields.render({
                createOrder: function () {
                    if ($('form.checkout').is('.createOrder') === false) {
                        $('form.checkout').addClass('createOrder');
                        var data;
                        if (is_from_checkout) {
                            data = $('form.checkout').serialize();
                        }
                        return fetch(psb_manager.create_order_url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: data
                        }).then(function (res) {
                            return res.json();
                        }).then(function (data) {
                            if (typeof data.success !== 'undefined') {
                                var messages = data.data.messages ? data.data.messages : data.data;
                                if ('string' === typeof messages) {
                                    showError('<ul class="woocommerce-error" role="alert">' + messages + '</ul>', $('form'));
                                } else {
                                    var messageItems = messages.map(function (message) {
                                        return '<li>' + message + '</li>';
                                    }).join('');
                                    showError('<ul class="woocommerce-error" role="alert">' + messageItems + '</ul>', $('form'));
                                }
                                return null;
                            } else {
                                return data.orderID;
                            }
                        });
                    }
                },
                onCancel: function (data, actions) {
                    actions.redirect(psb_manager.cancel_url);
                },
                onError: function (err) {
                    $('#place_order, #wc-paypal_smart_checkout-cc-form').unblock();
                },
                styles: {
                    'input': {
                        'font-size': '1.3em'
                    }
                },
                fields: {
                    number: {
                        selector: '#paypal_smart_checkout-card-number',
                        placeholder: '•••• •••• •••• ••••',
                        addClass: 'input-text wc-credit-card-form-card-number'
                    },
                    cvv: {
                        selector: '#paypal_smart_checkout-card-cvc',
                        placeholder: 'CVC'
                    },
                    expirationDate: {
                        selector: '#paypal_smart_checkout-card-expiry',
                        placeholder: 'MM / YY'
                    }
                }
            }).then(function (hf) {
                hf.on('cardTypeChange', function (event) {
                    if (event.cards.length === 1) {
                        $('#paypal_smart_checkout-card-number').removeClass().addClass(event.cards[0].type.replace("master-card", "mastercard").replace("american-express", "amex").replace("diners-club", "dinersclub").replace("-", ""));
                        $('#paypal_smart_checkout-card-number').addClass("input-text wc-credit-card-form-card-number hosted-field-braintree braintree-hosted-fields-valid");
                    }
                });
                $(document.body).on('submit_paypal_cc_form', function (event) {
                    event.preventDefault();
                    var state = hf.getState();
                    var contingencies = [];
                    contingencies = [psb_manager.threed_secure_contingency];
                    $('form.checkout').addClass('processing').block({
                        message: null,
                        overlayCSS: {
                            background: '#fff',
                            opacity: 0.6
                        }
                    });
                    $.psb_scroll_to_notices($('#order_review'));
                    hf.submit({
                        contingencies: contingencies,
                        cardholderName: document.getElementById('billing_first_name').value,
                        billingAddress: {
                            streetAddress: document.getElementById('billing_address_1').value,
                            extendedAddress: document.getElementById('billing_address_2').value,
                            region: document.getElementById('billing_state').value,
                            locality: document.getElementById('billing_city').value,
                            postalCode: document.getElementById('billing_postcode').value,
                            countryCodeAlpha2: document.getElementById('billing_country').value
                        }
                    }).then(
                            function (payload) {
                                if (payload.orderId) {
                                    $.post(psb_manager.cc_capture + "&paypal_order_id=" + payload.orderId + "&woocommerce-process-checkout-nonce=" + psb_manager.woocommerce_process_checkout, function (data) {
                                        window.location.href = data.data.redirect;
                                    });
                                }
                            }, function (error) {
                        $('#place_order, #wc-paypal_smart_checkout-cc-form').unblock();
                        $('form.checkout').removeClass('processing paypal_cc_submiting HostedFields createOrder').unblock();
                        var error_message = '';
                        if (error.details[0]['description']) {
                            error_message = error.details[0]['description'];
                        } else {
                            error_message = error.message;
                        }
                        if (error.details[0]['issue'] === 'INVALID_RESOURCE_ID') {
                            error_message = '';
                        }
                        if (error_message !== '') {
                            showError('<ul class="woocommerce-error" role="alert">' + error_message + '</ul>', $('form'));
                        }
                    }
                    );
                });
            }).catch(function (err) {
                console.log('error: ', JSON.stringify(err));
            });
        };

        if (is_from_checkout === false) {
            smart_button_render();
        }
        if (psb_manager.is_pay_page === 'yes') {
            smart_button_render();
        }
        var hide_show_place_order_button = function () {
            console.log('hi');
            if (is_hosted_field_eligible() === true) {
                $('#place_order').show();
            } else {
                if(is_psb_selected()) {
                    $('#place_order').hide();
                } else {
                    $('#place_order').show();
                }
            }
        };
        $(document.body).on('updated_cart_totals updated_checkout', function () {
            hide_show_place_order_button();
            setTimeout(function () {
                smart_button_render();
                if (is_hosted_field_eligible() === true) {
                    $('.checkout_cc_separator').show();
                    $('#wc-paypal_smart_checkout-cc-form').show();
                    hosted_button_render();
                } else {
                    $('.checkout_cc_separator').hide();
                }
            }, 300);
        });
        
        $( 'form.checkout' ).on( 'click', 'input[name="payment_method"]', function () {
            hide_show_place_order_button();
        });
        function is_hosted_field_eligible() {
            if (is_from_checkout) {
                if (psb_manager.advanced_card_payments === 'yes') {
                    if (typeof paypal === 'undefined') {
                        return false;
                    }
                    if (paypal.HostedFields.isEligible()) {
                        return true;
                    }
                }
            }
            return false;
        }
        function is_psb_selected() {
            if ($('#payment_method_paypal_smart_checkout').is(':checked')) {
                return true;
            } else {
                return false;
            }
        }
    });
});