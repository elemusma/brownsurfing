function onboardingCallback(authCode, sharedId) {
    const is_sandbox = document.querySelector('#woocommerce_paypal_smart_checkout_testmode');
    fetch(psb_param.psb_onboarding_endpoint, {
        method: 'POST',
        headers: {
            'content-type': 'application/json'
        },
        body: JSON.stringify({
            authCode: authCode,
            sharedId: sharedId,
            nonce: psb_param.psb_onboarding_endpoint_nonce,
            env: is_sandbox && is_sandbox.checked ? 'sandbox' : 'production'
        })
    });
}
(function ($) {
    'use strict';
    $(function () {
        $('#woocommerce_paypal_smart_checkout_testmode').change(function () {
            var psb_production_fields = $('#woocommerce_paypal_smart_checkout_api_client_id, #woocommerce_paypal_smart_checkout_api_secret').closest('tr');
            var psb_sandbox_fields = $('#woocommerce_paypal_smart_checkout_sandbox_client_id, #woocommerce_paypal_smart_checkout_sandbox_api_secret').closest('tr');
            var psb_production_onboarding_connect_fields = $('#woocommerce_paypal_smart_checkout_live_onboarding').closest('tr').hide();
            var psb_sandbox_onboarding_connect_fields = $('#woocommerce_paypal_smart_checkout_sandbox_onboarding').closest('tr').show();
            var psb_production_onboarding_disconnect_fields = $('#woocommerce_paypal_smart_checkout_live_disconnect').closest('tr').hide();
            var psb_sandbox_onboarding_disconnect_fields = $('#woocommerce_paypal_smart_checkout_sandbox_disconnect').closest('tr').show();
            if ($(this).is(':checked')) {
                psb_production_fields.hide();
                psb_production_onboarding_connect_fields.hide();
                psb_production_onboarding_disconnect_fields.hide();
                if (psb_param.is_sandbox_seller_onboarding_done === 'yes') {
                    psb_sandbox_fields.show();
                    psb_sandbox_onboarding_connect_fields.hide();
                    psb_sandbox_onboarding_disconnect_fields.show();
                } else {
                    if (psb_param.psb_is_local_server === 'yes') {
                        psb_sandbox_fields.show();
                        psb_sandbox_onboarding_connect_fields.hide();
                        psb_sandbox_onboarding_disconnect_fields.hide();
                    } else {
                        psb_sandbox_fields.hide();
                        psb_sandbox_onboarding_connect_fields.show();
                        psb_sandbox_onboarding_disconnect_fields.hide();
                    }

                }
            } else {
                psb_sandbox_fields.hide();
                psb_sandbox_onboarding_connect_fields.hide();
                psb_sandbox_onboarding_disconnect_fields.hide();
                if (psb_param.is_live_seller_onboarding_done === 'yes') {
                    psb_production_fields.show();
                    psb_production_onboarding_connect_fields.hide();
                    psb_production_onboarding_disconnect_fields.show();
                } else {
                    if (psb_param.psb_is_local_server === 'yes') {
                        psb_production_fields.show();
                        psb_production_onboarding_connect_fields.hide();
                        psb_production_onboarding_disconnect_fields.hide();
                    } else {
                        psb_production_fields.hide();
                        psb_production_onboarding_connect_fields.show();
                        psb_production_onboarding_disconnect_fields.hide();
                    }

                }
            }
        }).change();
        $(".psb_paypal_checkout_gateway_manual_credential_input").on('click', function (e) {
            e.preventDefault();
            var psb_production_fields = $('#woocommerce_paypal_smart_checkout_api_client_id, #woocommerce_paypal_smart_checkout_api_secret').closest('tr');
            var psb_sandbox_fields = $('#woocommerce_paypal_smart_checkout_sandbox_client_id, #woocommerce_paypal_smart_checkout_sandbox_api_secret').closest('tr');
            if ($('#woocommerce_paypal_smart_checkout_testmode').is(':checked')) {
                psb_sandbox_fields.toggle();
                $('#woocommerce_paypal_smart_checkout_sandbox_api_credentials, #woocommerce_paypal_smart_checkout_sandbox_api_credentials + p').toggle();
            } else {
                psb_production_fields.toggle();
                $('#woocommerce_paypal_smart_checkout_api_credentials, #woocommerce_paypal_smart_checkout_api_credentials + p').toggle();
            }
        });
        $(".psb-disconnect").click(function () {
            if ($('#woocommerce_paypal_smart_checkout_testmode').is(':checked')) {
                $('#woocommerce_paypal_smart_checkout_sandbox_client_id, #woocommerce_paypal_smart_checkout_sandbox_api_secret').val('');
            } else {
                $('#woocommerce_paypal_smart_checkout_api_client_id, #woocommerce_paypal_smart_checkout_api_secret').val('');
            }
            $('.woocommerce-save-button').click();
        });
        $('#woocommerce_paypal_smart_checkout_enable_product_button').change(function () {
            if ($(this).is(':checked')) {
                $('.paypal_smart_checkout_product_button_settings').closest('tr').show();
            } else {
                $('.paypal_smart_checkout_product_button_settings').closest('tr').hide();
            }
        }).change();
        $('#woocommerce_paypal_smart_checkout_enable_cart_button').change(function () {
            if ($(this).is(':checked')) {
                $('.paypal_smart_checkout_cart_button_settings').closest('tr').show();
            } else {
                $('.paypal_smart_checkout_cart_button_settings').closest('tr').hide();
            }
        }).change();
        $('#woocommerce_paypal_smart_checkout_enable_checkout_button').change(function () {
            if ($(this).is(':checked')) {
                $('.paypal_smart_checkout_checkout_button_settings').closest('tr').show();
            } else {
                $('.paypal_smart_checkout_checkout_button_settings').closest('tr').hide();
            }
        }).change();
        $('#woocommerce_paypal_smart_checkout_enable_mini_cart_button').change(function () {
            if ($(this).is(':checked')) {
                $('.paypal_smart_checkout_mini_cart_button_settings').closest('tr').show();
            } else {
                $('.paypal_smart_checkout_mini_cart_button_settings').closest('tr').hide();
            }
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_enable_advanced_card_payments').change(function () {
            if (jQuery(this).is(':checked')) {
                jQuery('#woocommerce_paypal_smart_checkout_3d_secure_contingency').closest('tr').show();
            } else {
                jQuery('#woocommerce_paypal_smart_checkout_3d_secure_contingency').closest('tr').hide();
            }
        }).change();
        var psb_available = jQuery('#woocommerce_paypal_smart_checkout_enable_advanced_card_payments, #woocommerce_paypal_smart_checkout_3d_secure_contingency').closest('tr');
        if (psb_param.is_advanced_cards_available === 'yes') {
            psb_available.show();
        } else {
            psb_available.hide();
        }
        var hide_show_home_shortcode = function () {
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_home_shortcode').change(function () {
                var home_preview_shortcode = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_home_preview_shortcode').closest('tr');
                if (jQuery(this).is(':checked')) {
                    if (is_pay_later_messaging_enable() === true && is_pay_later_messaging_home_page_enable()) {
                        home_preview_shortcode.show();
                    }
                } else {
                    home_preview_shortcode.hide();
                }
            }).change();
        };
        var hide_show_category_shortcode = function () {
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_category_shortcode').change(function () {
                var category_preview_shortcode = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_category_preview_shortcode').closest('tr');
                if (jQuery(this).is(':checked')) {
                    if (is_pay_later_messaging_enable() === true && is_pay_later_messaging_category_page_enable()) {
                        category_preview_shortcode.show();
                    }
                } else {
                    category_preview_shortcode.hide();
                }
            }).change();
        };
        var psb_copy_text = function (css_class) {
            jQuery(document.body).on('click', css_class, function (evt) {
                evt.preventDefault();
                wcClearClipboard();
                wcSetClipboard(jQuery.trim(jQuery(this).prev('input').val()), jQuery(css_class));
            }).on('aftercopy', css_class, function () {
                jQuery(css_class).tipTip({
                    'attribute': 'data-tip',
                    'activation': 'focus',
                    'fadeIn': 50,
                    'fadeOut': 50,
                    'delay': 0
                }).focus();
            });
        };
        var hide_show_product_shortcode = function () {
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_product_shortcode').change(function () {
                var product_preview_shortcode = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_product_preview_shortcode').closest('tr');
                if (jQuery(this).is(':checked')) {
                    if (is_pay_later_messaging_enable() === true && is_pay_later_messaging_product_page_enable()) {
                        product_preview_shortcode.show();
                    }
                } else {
                    product_preview_shortcode.hide();
                }
            }).change();
        };
        var hide_show_cart_shortcode = function () {
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_cart_shortcode').change(function () {
                var cart_preview_shortcode = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_cart_preview_shortcode').closest('tr');
                if (jQuery(this).is(':checked')) {
                    if (is_pay_later_messaging_enable() === true && is_pay_later_messaging_cart_page_enable()) {
                        cart_preview_shortcode.show();
                    }
                } else {
                    cart_preview_shortcode.hide();
                }
            }).change();
        };
        var hide_show_payment_shortcode = function () {
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_payment_shortcode').change(function () {
                var payment_preview_shortcode = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_payment_preview_shortcode').closest('tr');
                if (jQuery(this).is(':checked')) {
                    if (is_pay_later_messaging_enable() === true && is_pay_later_messaging_payment_page_enable()) {
                        payment_preview_shortcode.show();
                    }
                } else {
                    payment_preview_shortcode.hide();
                }
            }).change();
        };
        setTimeout(function () {
            jQuery('#woocommerce_paypal_smart_checkout_enabled_pay_later_messaging').trigger('change');

        }, 5000);
        psb_copy_text('.home_copy_text');
        psb_copy_text('.category_copy_text');
        psb_copy_text('.product_copy_text');
        psb_copy_text('.cart_copy_text');
        psb_copy_text('.payment_copy_text');
        var is_pay_later_messaging_enable = function () {
            if (jQuery('#woocommerce_paypal_smart_checkout_enabled_pay_later_messaging').is(':checked')) {
                return true;
            }
            return false;
        };
        var is_pay_later_messaging_home_page_enable = function () {
            if (is_pay_later_messaging_enable() === false) {
                return false;
            }
            if (jQuery.inArray('home', jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_page_type').val()) === -1) {
                return false;
            }
            return true;
        };
        var pay_later_messaging_home_page_hide_show = function () {
            var pay_later_messaging_home_field_parent = jQuery('.pay_later_messaging_home_field').closest('tr');
            var pay_later_messaging_home_field_p_tag = jQuery('.pay_later_messaging_home_field').next("p");
            var pay_later_messaging_home_field = jQuery('.pay_later_messaging_home_field');
            var pay_later_messaging_home_base_field_parent = jQuery('.pay_later_messaging_home_base_field').closest('tr');
            var pay_later_messaging_home_base_field_p_tag = jQuery('.pay_later_messaging_home_base_field').next("p");
            var pay_later_messaging_home_base_field = jQuery('.pay_later_messaging_home_base_field');
            var pay_later_messaging_home_preview = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_home_preview');
            if (is_pay_later_messaging_home_page_enable()) {
                pay_later_messaging_home_field_parent.show();
                pay_later_messaging_home_field.show();
                pay_later_messaging_home_field_p_tag.show();
                pay_later_messaging_home_base_field_parent.show();
                pay_later_messaging_home_base_field.show();
                pay_later_messaging_home_base_field_p_tag.show();
                pay_later_messaging_home_preview.show();
            } else {
                pay_later_messaging_home_field_parent.hide();
                pay_later_messaging_home_field.hide();
                pay_later_messaging_home_field_p_tag.hide();
                pay_later_messaging_home_base_field_parent.hide();
                pay_later_messaging_home_base_field.hide();
                pay_later_messaging_home_base_field_p_tag.hide();
                pay_later_messaging_home_preview.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_home_layout_type').trigger('change');
            hide_show_home_shortcode();
        };
        var is_pay_later_messaging_category_page_enable = function () {
            if (is_pay_later_messaging_enable() === false) {
                return false;
            }
            if (jQuery.inArray('category', jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_page_type').val()) === -1) {
                return false;
            }
            return true;
        };
        var pay_later_messaging_category_page_hide_show = function () {
            var pay_later_messaging_category_field_parent = jQuery('.pay_later_messaging_category_field').closest('tr');
            var pay_later_messaging_category_field_p_tag = jQuery('.pay_later_messaging_category_field').next("p");
            var pay_later_messaging_category_field = jQuery('.pay_later_messaging_category_field');
            var pay_later_messaging_category_base_field_parent = jQuery('.pay_later_messaging_category_base_field').closest('tr');
            var pay_later_messaging_category_base_field_p_tag = jQuery('.pay_later_messaging_category_base_field').next("p");
            var pay_later_messaging_category_base_field = jQuery('.pay_later_messaging_category_base_field');
            var pay_later_messaging_category_preview = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_category_preview');
            if (is_pay_later_messaging_category_page_enable()) {
                pay_later_messaging_category_field_parent.show();
                pay_later_messaging_category_field.show();
                pay_later_messaging_category_field_p_tag.show();
                pay_later_messaging_category_base_field_parent.show();
                pay_later_messaging_category_base_field.show();
                pay_later_messaging_category_base_field_p_tag.show();
                pay_later_messaging_category_preview.show();
            } else {
                pay_later_messaging_category_field_parent.hide();
                pay_later_messaging_category_field.hide();
                pay_later_messaging_category_field_p_tag.hide();
                pay_later_messaging_category_base_field_parent.hide();
                pay_later_messaging_category_base_field.hide();
                pay_later_messaging_category_base_field_p_tag.hide();
                pay_later_messaging_category_preview.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_category_layout_type').trigger('change');
            hide_show_category_shortcode();
        };
        var is_pay_later_messaging_product_page_enable = function () {
            if (is_pay_later_messaging_enable() === false) {
                return false;
            }
            if (jQuery.inArray('product', jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_page_type').val()) === -1) {
                return false;
            }
            return true;
        };
        var pay_later_messaging_product_page_hide_show = function () {
            var pay_later_messaging_product_field_parent = jQuery('.pay_later_messaging_product_field').closest('tr');
            var pay_later_messaging_product_field_p_tag = jQuery('.pay_later_messaging_product_field').next("p");
            var pay_later_messaging_product_field = jQuery('.pay_later_messaging_product_field');
            var pay_later_messaging_product_base_field_parent = jQuery('.pay_later_messaging_product_base_field').closest('tr');
            var pay_later_messaging_product_base_field_p_tag = jQuery('.pay_later_messaging_product_base_field').next("p");
            var pay_later_messaging_product_base_field = jQuery('.pay_later_messaging_product_base_field');
            var pay_later_messaging_product_preview = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_product_preview');
            if (is_pay_later_messaging_product_page_enable()) {
                pay_later_messaging_product_field_parent.show();
                pay_later_messaging_product_field.show();
                pay_later_messaging_product_field_p_tag.show();
                pay_later_messaging_product_base_field_parent.show();
                pay_later_messaging_product_base_field.show();
                pay_later_messaging_product_base_field_p_tag.show();
                pay_later_messaging_product_preview.show();
            } else {
                pay_later_messaging_product_field_parent.hide();
                pay_later_messaging_product_field.hide();
                pay_later_messaging_product_field_p_tag.hide();
                pay_later_messaging_product_base_field_parent.hide();
                pay_later_messaging_product_base_field.hide();
                pay_later_messaging_product_base_field_p_tag.hide();
                pay_later_messaging_product_preview.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_product_layout_type').trigger('change');
            hide_show_product_shortcode();
        };
        var is_pay_later_messaging_cart_page_enable = function () {
            if (is_pay_later_messaging_enable() === false) {
                return false;
            }
            if (jQuery.inArray('cart', jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_page_type').val()) === -1) {
                return false;
            }
            return true;
        };
        var pay_later_messaging_cart_page_hide_show = function () {
            var pay_later_messaging_cart_field_parent = jQuery('.pay_later_messaging_cart_field').closest('tr');
            var pay_later_messaging_cart_field_p_tag = jQuery('.pay_later_messaging_cart_field').next("p");
            var pay_later_messaging_cart_field = jQuery('.pay_later_messaging_cart_field');
            var pay_later_messaging_cart_base_field_parent = jQuery('.pay_later_messaging_cart_base_field').closest('tr');
            var pay_later_messaging_cart_base_field_p_tag = jQuery('.pay_later_messaging_cart_base_field').next("p");
            var pay_later_messaging_cart_base_field = jQuery('.pay_later_messaging_cart_base_field');
            var pay_later_messaging_cart_preview = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_cart_preview');
            if (is_pay_later_messaging_cart_page_enable()) {
                pay_later_messaging_cart_field_parent.show();
                pay_later_messaging_cart_field.show();
                pay_later_messaging_cart_field_p_tag.show();
                pay_later_messaging_cart_base_field_parent.show();
                pay_later_messaging_cart_base_field.show();
                pay_later_messaging_cart_base_field_p_tag.show();
                pay_later_messaging_cart_preview.show();
            } else {
                pay_later_messaging_cart_field_parent.hide();
                pay_later_messaging_cart_field.hide();
                pay_later_messaging_cart_field_p_tag.hide();
                pay_later_messaging_cart_base_field_parent.hide();
                pay_later_messaging_cart_base_field.hide();
                pay_later_messaging_cart_base_field_p_tag.hide();
                pay_later_messaging_cart_preview.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_cart_layout_type').trigger('change');
            hide_show_cart_shortcode();
        };
        var is_pay_later_messaging_payment_page_enable = function () {
            if (is_pay_later_messaging_enable() === false) {
                return false;
            }
            if (jQuery.inArray('payment', jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_page_type').val()) === -1) {
                return false;
            }
            return true;
        };
        var pay_later_messaging_payment_page_hide_show = function () {
            var pay_later_messaging_payment_field_parent = jQuery('.pay_later_messaging_payment_field').closest('tr');
            var pay_later_messaging_payment_field_p_tag = jQuery('.pay_later_messaging_payment_field').next("p");
            var pay_later_messaging_payment_field = jQuery('.pay_later_messaging_payment_field');
            var pay_later_messaging_payment_base_field_parent = jQuery('.pay_later_messaging_payment_base_field').closest('tr');
            var pay_later_messaging_payment_base_field_p_tag = jQuery('.pay_later_messaging_payment_base_field').next("p");
            var pay_later_messaging_payment_base_field = jQuery('.pay_later_messaging_payment_base_field');
            var pay_later_messaging_payment_preview = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_payment_preview');
            if (is_pay_later_messaging_payment_page_enable()) {
                pay_later_messaging_payment_field_parent.show();
                pay_later_messaging_payment_field.show();
                pay_later_messaging_payment_field_p_tag.show();
                pay_later_messaging_payment_base_field_parent.show();
                pay_later_messaging_payment_base_field.show();
                pay_later_messaging_payment_base_field_p_tag.show();
                pay_later_messaging_payment_preview.show();
            } else {
                pay_later_messaging_payment_field_parent.hide();
                pay_later_messaging_payment_field.hide();
                pay_later_messaging_payment_field_p_tag.hide();
                pay_later_messaging_payment_base_field_parent.hide();
                pay_later_messaging_payment_base_field.hide();
                pay_later_messaging_payment_base_field_p_tag.hide();
                pay_later_messaging_payment_preview.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_payment_layout_type').trigger('change');
            hide_show_payment_shortcode();
        };
        jQuery('#woocommerce_paypal_smart_checkout_enabled_pay_later_messaging').change(function () {
            var pay_later_messaging_field_parent = jQuery('.pay_later_messaging_field').closest('tr');
            var pay_later_messaging_field_p_tag = jQuery('.pay_later_messaging_field').next("p");
            var pay_later_messaging_field = jQuery('.pay_later_messaging_field');
            if (jQuery(this).is(':checked')) {
                pay_later_messaging_field_parent.show();
                pay_later_messaging_field.show();
                pay_later_messaging_field_p_tag.show();
            } else {
                pay_later_messaging_field_parent.hide();
                pay_later_messaging_field.hide();
                pay_later_messaging_field_p_tag.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_page_type').trigger('change');
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_page_type').change(function () {
            pay_later_messaging_home_page_hide_show();
            pay_later_messaging_category_page_hide_show();
            pay_later_messaging_product_page_hide_show();
            pay_later_messaging_cart_page_hide_show();
            pay_later_messaging_payment_page_hide_show();
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_home_layout_type').change(function () {
            var pay_later_messaging_home_text_layout_field_parent = jQuery('.pay_later_messaging_home_text_layout_field').closest('tr');
            var pay_later_messaging_home_text_layout_field_p_tag = jQuery('.pay_later_messaging_home_text_layout_field').next("p");
            var pay_later_messaging_home_text_layout_field = jQuery('.pay_later_messaging_home_text_layout_field');
            var pay_later_messaging_home_flex_layout_field_parent = jQuery('.pay_later_messaging_home_flex_layout_field').closest('tr');
            var pay_later_messaging_home_flex_layout_field_p_tag = jQuery('.pay_later_messaging_home_flex_layout_field').next("p");
            var pay_later_messaging_home_flex_layout_field = jQuery('.pay_later_messaging_home_flex_layout_field');
            if (this.value === 'text') {
                if (is_pay_later_messaging_home_page_enable()) {
                    pay_later_messaging_home_text_layout_field_parent.show();
                    pay_later_messaging_home_text_layout_field.show();
                    pay_later_messaging_home_text_layout_field_p_tag.show();
                    pay_later_messaging_home_flex_layout_field_parent.hide();
                    pay_later_messaging_home_flex_layout_field_p_tag.hide();
                    pay_later_messaging_home_flex_layout_field.hide();
                }
            } else {
                if (is_pay_later_messaging_home_page_enable()) {
                    pay_later_messaging_home_flex_layout_field_parent.show();
                    pay_later_messaging_home_flex_layout_field_p_tag.show();
                    pay_later_messaging_home_flex_layout_field.show();
                }
                pay_later_messaging_home_text_layout_field_parent.hide();
                pay_later_messaging_home_text_layout_field.hide();
                pay_later_messaging_home_text_layout_field_p_tag.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_home_text_layout_logo_type').trigger('change');
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_home_text_layout_logo_type').change(function () {
            var pay_later_messaging_home_text_layout_logo_position = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_home_text_layout_logo_position').closest('tr');
            if (jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_home_layout_type').val() === 'text' && (this.value === 'primary' || this.value === 'alternative')) {
                if (is_pay_later_messaging_home_page_enable()) {
                    pay_later_messaging_home_text_layout_logo_position.show();
                }
            } else {
                pay_later_messaging_home_text_layout_logo_position.hide();
            }
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_category_layout_type').change(function () {
            var pay_later_messaging_category_text_layout_field_parent = jQuery('.pay_later_messaging_category_text_layout_field').closest('tr');
            var pay_later_messaging_category_text_layout_field_p_tag = jQuery('.pay_later_messaging_category_text_layout_field').next("p");
            var pay_later_messaging_category_text_layout_field = jQuery('.pay_later_messaging_category_text_layout_field');
            var pay_later_messaging_category_flex_layout_field_parent = jQuery('.pay_later_messaging_category_flex_layout_field').closest('tr');
            var pay_later_messaging_category_flex_layout_field_p_tag = jQuery('.pay_later_messaging_category_flex_layout_field').next("p");
            var pay_later_messaging_category_flex_layout_field = jQuery('.pay_later_messaging_category_flex_layout_field');
            if (this.value === 'text') {
                if (is_pay_later_messaging_category_page_enable()) {
                    pay_later_messaging_category_text_layout_field_parent.show();
                    pay_later_messaging_category_text_layout_field.show();
                    pay_later_messaging_category_text_layout_field_p_tag.show();
                    pay_later_messaging_category_flex_layout_field_parent.hide();
                    pay_later_messaging_category_flex_layout_field_p_tag.hide();
                    pay_later_messaging_category_flex_layout_field.hide();
                }
            } else {
                if (is_pay_later_messaging_category_page_enable()) {
                    pay_later_messaging_category_flex_layout_field_parent.show();
                    pay_later_messaging_category_flex_layout_field_p_tag.show();
                    pay_later_messaging_category_flex_layout_field.show();
                }
                pay_later_messaging_category_text_layout_field_parent.hide();
                pay_later_messaging_category_text_layout_field.hide();
                pay_later_messaging_category_text_layout_field_p_tag.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_category_text_layout_logo_type').trigger('change');
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_category_text_layout_logo_type').change(function () {
            var pay_later_messaging_category_text_layout_logo_position = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_category_text_layout_logo_position').closest('tr');
            if (jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_category_layout_type').val() === 'text' && (this.value === 'primary' || this.value === 'alternative')) {
                if (is_pay_later_messaging_category_page_enable()) {
                    pay_later_messaging_category_text_layout_logo_position.show();
                }
            } else {
                pay_later_messaging_category_text_layout_logo_position.hide();
            }
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_product_layout_type').change(function () {
            var pay_later_messaging_product_text_layout_field_parent = jQuery('.pay_later_messaging_product_text_layout_field').closest('tr');
            var pay_later_messaging_product_text_layout_field_p_tag = jQuery('.pay_later_messaging_product_text_layout_field').next("p");
            var pay_later_messaging_product_text_layout_field = jQuery('.pay_later_messaging_product_text_layout_field');
            var pay_later_messaging_product_flex_layout_field_parent = jQuery('.pay_later_messaging_product_flex_layout_field').closest('tr');
            var pay_later_messaging_product_flex_layout_field_p_tag = jQuery('.pay_later_messaging_product_flex_layout_field').next("p");
            var pay_later_messaging_product_flex_layout_field = jQuery('.pay_later_messaging_product_flex_layout_field');
            if (this.value === 'text') {
                if (is_pay_later_messaging_product_page_enable()) {
                    pay_later_messaging_product_text_layout_field_parent.show();
                    pay_later_messaging_product_text_layout_field.show();
                    pay_later_messaging_product_text_layout_field_p_tag.show();
                    pay_later_messaging_product_flex_layout_field_parent.hide();
                    pay_later_messaging_product_flex_layout_field_p_tag.hide();
                    pay_later_messaging_product_flex_layout_field.hide();
                }
            } else {
                if (is_pay_later_messaging_product_page_enable()) {
                    pay_later_messaging_product_flex_layout_field_parent.show();
                    pay_later_messaging_product_flex_layout_field_p_tag.show();
                    pay_later_messaging_product_flex_layout_field.show();
                }
                pay_later_messaging_product_text_layout_field_parent.hide();
                pay_later_messaging_product_text_layout_field.hide();
                pay_later_messaging_product_text_layout_field_p_tag.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_product_text_layout_logo_type').trigger('change');
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_product_text_layout_logo_type').change(function () {
            var pay_later_messaging_product_text_layout_logo_position = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_product_text_layout_logo_position').closest('tr');
            if (jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_product_layout_type').val() === 'text' && (this.value === 'primary' || this.value === 'alternative')) {
                if (is_pay_later_messaging_product_page_enable()) {
                    pay_later_messaging_product_text_layout_logo_position.show();
                }
            } else {
                pay_later_messaging_product_text_layout_logo_position.hide();
            }
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_cart_layout_type').change(function () {
            var pay_later_messaging_cart_text_layout_field_parent = jQuery('.pay_later_messaging_cart_text_layout_field').closest('tr');
            var pay_later_messaging_cart_text_layout_field_p_tag = jQuery('.pay_later_messaging_cart_text_layout_field').next("p");
            var pay_later_messaging_cart_text_layout_field = jQuery('.pay_later_messaging_cart_text_layout_field');
            var pay_later_messaging_cart_flex_layout_field_parent = jQuery('.pay_later_messaging_cart_flex_layout_field').closest('tr');
            var pay_later_messaging_cart_flex_layout_field_p_tag = jQuery('.pay_later_messaging_cart_flex_layout_field').next("p");
            var pay_later_messaging_cart_flex_layout_field = jQuery('.pay_later_messaging_cart_flex_layout_field');
            if (this.value === 'text') {
                if (is_pay_later_messaging_cart_page_enable()) {
                    pay_later_messaging_cart_text_layout_field_parent.show();
                    pay_later_messaging_cart_text_layout_field.show();
                    pay_later_messaging_cart_text_layout_field_p_tag.show();
                    pay_later_messaging_cart_flex_layout_field_parent.hide();
                    pay_later_messaging_cart_flex_layout_field_p_tag.hide();
                    pay_later_messaging_cart_flex_layout_field.hide();
                }
            } else {
                if (is_pay_later_messaging_cart_page_enable()) {
                    pay_later_messaging_cart_flex_layout_field_parent.show();
                    pay_later_messaging_cart_flex_layout_field_p_tag.show();
                    pay_later_messaging_cart_flex_layout_field.show();
                }
                pay_later_messaging_cart_text_layout_field_parent.hide();
                pay_later_messaging_cart_text_layout_field.hide();
                pay_later_messaging_cart_text_layout_field_p_tag.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_cart_text_layout_logo_type').trigger('change');
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_cart_text_layout_logo_type').change(function () {
            var pay_later_messaging_cart_text_layout_logo_position = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_cart_text_layout_logo_position').closest('tr');
            if (jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_cart_layout_type').val() === 'text' && (this.value === 'primary' || this.value === 'alternative')) {
                if (is_pay_later_messaging_cart_page_enable()) {
                    pay_later_messaging_cart_text_layout_logo_position.show();
                }
            } else {
                pay_later_messaging_cart_text_layout_logo_position.hide();
            }
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_payment_layout_type').change(function () {
            var pay_later_messaging_payment_text_layout_field_parent = jQuery('.pay_later_messaging_payment_text_layout_field').closest('tr');
            var pay_later_messaging_payment_text_layout_field_p_tag = jQuery('.pay_later_messaging_payment_text_layout_field').next("p");
            var pay_later_messaging_payment_text_layout_field = jQuery('.pay_later_messaging_payment_text_layout_field');
            var pay_later_messaging_payment_flex_layout_field_parent = jQuery('.pay_later_messaging_payment_flex_layout_field').closest('tr');
            var pay_later_messaging_payment_flex_layout_field_p_tag = jQuery('.pay_later_messaging_payment_flex_layout_field').next("p");
            var pay_later_messaging_payment_flex_layout_field = jQuery('.pay_later_messaging_payment_flex_layout_field');
            if (this.value === 'text') {
                if (is_pay_later_messaging_payment_page_enable()) {
                    pay_later_messaging_payment_text_layout_field_parent.show();
                    pay_later_messaging_payment_text_layout_field.show();
                    pay_later_messaging_payment_text_layout_field_p_tag.show();
                    pay_later_messaging_payment_flex_layout_field_parent.hide();
                    pay_later_messaging_payment_flex_layout_field_p_tag.hide();
                    pay_later_messaging_payment_flex_layout_field.hide();
                }
            } else {
                if (is_pay_later_messaging_payment_page_enable()) {
                    pay_later_messaging_payment_flex_layout_field_parent.show();
                    pay_later_messaging_payment_flex_layout_field_p_tag.show();
                    pay_later_messaging_payment_flex_layout_field.show();
                }
                pay_later_messaging_payment_text_layout_field_parent.hide();
                pay_later_messaging_payment_text_layout_field.hide();
                pay_later_messaging_payment_text_layout_field_p_tag.hide();
            }
            jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_payment_text_layout_logo_type').trigger('change');
        }).change();
        jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_payment_text_layout_logo_type').change(function () {
            var pay_later_messaging_payment_text_layout_logo_position = jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_payment_text_layout_logo_position').closest('tr');
            if (jQuery('#woocommerce_paypal_smart_checkout_pay_later_messaging_payment_layout_type').val() === 'text' && (this.value === 'primary' || this.value === 'alternative')) {
                if (is_pay_later_messaging_payment_page_enable()) {
                    pay_later_messaging_payment_text_layout_logo_position.show();
                }
            } else {
                pay_later_messaging_payment_text_layout_logo_position.hide();
            }
        }).change();
        jQuery("#woocommerce_paypal_smart_checkout_product_button_layout").change(function () {
            var paypal_smart_checkout_product_tagline = jQuery("#woocommerce_paypal_smart_checkout_product_button_tagline").closest('tr');
            if (this.value === 'vertical') {
                paypal_smart_checkout_product_tagline.hide();
            } else {
                paypal_smart_checkout_product_tagline.show();
            }
        }).change();
        jQuery("#woocommerce_paypal_smart_checkout_cart_button_layout").change(function () {
            var paypal_smart_checkout_cart_tagline = jQuery("#woocommerce_paypal_smart_checkout_cart_button_tagline").closest('tr');
            if (this.value === 'vertical') {
                paypal_smart_checkout_cart_tagline.hide();
            } else {
                paypal_smart_checkout_cart_tagline.show();
            }
        }).change();
        jQuery("#woocommerce_paypal_smart_checkout_checkout_button_layout").change(function () {
            var paypal_smart_checkout_checkout_tagline = jQuery("#woocommerce_paypal_smart_checkout_checkout_button_tagline").closest('tr');
            if (this.value === 'vertical') {
                paypal_smart_checkout_checkout_tagline.hide();
            } else {
                paypal_smart_checkout_checkout_tagline.show();
            }
        }).change();
        jQuery("#woocommerce_paypal_smart_checkout_mini_cart_button_layout").change(function () {
            var paypal_smart_checkout_mini_cart_tagline = jQuery("#woocommerce_paypal_smart_checkout_mini_cart_button_tagline").closest('tr');
            if (this.value === 'vertical') {
                paypal_smart_checkout_mini_cart_tagline.hide();
            } else {
                paypal_smart_checkout_mini_cart_tagline.show();
            }
        }).change();
    });
})(jQuery);
