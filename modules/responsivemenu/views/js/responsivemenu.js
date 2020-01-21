/*
* 2013-2018 MADEF IT
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to contact@madef.fr so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    MADEF IT <contact@madef.fr>
*  @copyright 2013-2018 MADEF IT
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

jQuery(function() {
    ResponsiveMenu.init();
    new ResponsiveMenuCart();
});

var ResponsiveMenu = {
    hash: '',
    tree: [],
    cache: {},
    init: function() {
        ResponsiveMenu.tree = RM_CATEGORY_PATH;
        ResponsiveMenu.hash = RM_CATEGORY_HASH;

        ResponsiveMenu.initBodyClass();

        var size = ResponsiveMenu.tree.length;

        var menuWidth = jQuery('.rm-pannel').width();
        jQuery('.js-rm-column').css('width', menuWidth + 'px');

        $.each(ResponsiveMenu.tree, function(key, category_id) {
            ResponsiveMenu.load(category_id, false);
        });

        if (RM_PULL) {
            jQuery('.rm-header').appendTo('body');
            jQuery('.rm-overlay').appendTo('body');
            jQuery('.rm-pannel').appendTo('body');
        }

        jQuery('.rm-pannel').click(function() {
            return false; // Stop propagation
        });

        jQuery('.rm-header .search').click(function() {
            if (jQuery('.rm-searchbar').hasClass('opened')) {
                jQuery('.rm-searchbar')
                    .removeClass('opened')
                    .addClass('closed');
            } else {
                jQuery('.rm-searchbar')
                    .addClass('opened')
                    .removeClass('closed');
            }
            return false;
        });
        jQuery('.rm-search-bar__submit').click(function() {
            jQuery(this).parent().submit();
        });

        jQuery('.js-rm-trigger, #menu-icon').on('click touchstart tap', function() {
            var menuWidth = jQuery('.rm-pannel').width();
            var size = ResponsiveMenu.tree.length;
            jQuery('.js-rm-column').css('width', menuWidth + 'px');
            jQuery('.rm-container').css('width', (size * menuWidth) + 'px');

            if (jQuery('.rm-overlay').hasClass('rm-overlay--close')) {
                jQuery('.rm-overlay').removeClass('rm-overlay--close');
                jQuery('.rm-overlay').addClass('rm-overlay--open');
                jQuery('.rm-pannel').removeClass('rm-pannel--close');
                jQuery('.rm-pannel').addClass('rm-pannel--open');
            } else {
                jQuery('.rm-overlay').addClass('rm-overlay--close');
                jQuery('.rm-overlay').removeClass('rm-overlay--open');
                jQuery('.rm-pannel').addClass('rm-pannel--close');
                jQuery('.rm-pannel').removeClass('rm-pannel--open');
            }

            return false;
        });

        jQuery( window ).resize(function() {
            var menuWidth = jQuery('.rm-pannel').width();
            var size = ResponsiveMenu.tree.length;
            jQuery('.js-rm-column').css('width', menuWidth + 'px');
            jQuery('.rm-container').css('width', (size * menuWidth) + 'px');
        });

        jQuery('.rm-container').on('click', '.rm-level__title', function() {
            window.location.href = jQuery(this).attr('href');
        });
        jQuery('.rm-container').on('click', '.rm-login-bar a', function() {
            window.location.href = jQuery(this).attr('href');
        });

        jQuery('.rm-container').on('click', '.rm-level__item', function() {
            if (typeof(jQuery(this).attr('data-load')) !== 'undefined') {
                ResponsiveMenu.loadMenu(parseInt(jQuery(this).attr('data-load')));
                return false; // Stop propagation
            } else {
                if (jQuery(this).data('target') == 'blank') {
                    window.open(jQuery(this).attr('href'));
                } else {
                    window.location.href = jQuery(this).attr('href');
                }
            }
        });

        jQuery('.rm-container').css('width', (size * menuWidth) + 'px');
    },
    initBodyClass: function() {
        if (RM_DISPLAY_SEARCH) {
            jQuery('body').addClass('rm-display-search');
        }
        if (RM_HEADER_BAR) {
            jQuery('body').addClass('rm-body-with-header');
        }
    },
    loadMenu: function(id) {
        var menuWidth = jQuery('.rm-pannel').width();
        jQuery('.js-rm-column').css('width', menuWidth + 'px');
        if ($.inArray(id, ResponsiveMenu.tree) != -1) {
            var old_id = ResponsiveMenu.tree.pop();
            var size = ResponsiveMenu.tree.length;
            jQuery('#rm-category-'+old_id).remove();
            jQuery('.rm-container').css('width', (size * menuWidth) + 'px');
        } else {
            ResponsiveMenu.tree.push(id);
            var size = ResponsiveMenu.tree.length;
            jQuery('.rm-container').css('width', (size * menuWidth) + 'px');
            ResponsiveMenu.load(id);
        }
    },
    load: function(id, async) {
        if (typeof(async) === 'undefined') {
            async = true;
        }

        if (ResponsiveMenu.getCache(id) === false) {
            $.ajax({
                type: 'GET',
                url: RM_AJAX_URL,
                async: false,
                dataType: 'json',
                data: { id: id, action: 'menu', type: 'category' }
            }).done(function (data) {
                if (data.error) {
                    alert('Error while loading menu');
                    return;
                }
                ResponsiveMenu.hash = data.hash;
                ResponsiveMenu.setCache(id, data.html);
                ResponsiveMenu.renderCategory(id);
            }).fail(function(){
                alert('Error while loading menu');
                return;
            });
        } else {
            ResponsiveMenu.renderCategory(id);
        }
    },
    renderCategory: function(id) {
        jQuery('.rm-container').append(jQuery(ResponsiveMenu.getCache(id)));

        if (RM_CURRENT_CATEGORY) {
            var CurrentCategoryId = RM_CURRENT_CATEGORY;
        } else {
            var CurrentCategoryId = ResponsiveMenu.tree[ResponsiveMenu.tree.length-1];
            RM_CURRENT_CATEGORY = CurrentCategoryId;
        }
        jQuery('.rm-level__item--selected').removeClass('rm-level__item--selected');
        jQuery('.rm-category-'+CurrentCategoryId).addClass('rm-level__item--selected');

        jQuery('.rm-pannel').scrollTop(0);

        var menuWidth = jQuery('.rm-pannel').width();
        jQuery('.js-rm-column').css('width', menuWidth + 'px');

    },
    getCache: function(id)
    {
        if (typeof(localStorage) != 'undefined') {
            if (localStorage.getItem('hash-' + id + '-' + RM_ID_LANG) == ResponsiveMenu.hash) {
                return localStorage.getItem(id + '-' + RM_ID_LANG);
            }
        }

        if (typeof(ResponsiveMenu.cache[id]) != 'undefined') {
            return ResponsiveMenu.cache[id];
        }

        return false;
    },
    setCache: function(id, value)
    {
        if (typeof(localStorage) === 'undefined') {
            ResponsiveMenu.cache[id] = value;
            return false;
        }
        try {
            localStorage.setItem('hash-' + id + '-' + RM_ID_LANG, ResponsiveMenu.hash);
            localStorage.setItem(id + '-' + RM_ID_LANG, value);
        } catch (e) {
            ResponsiveMenu.cache[id] = value;
        }
    }
};


ResponsiveMenuCart = function() {
    if (parseInt(jQuery.fn.jquery.split('.')[0]) > 1 || parseInt(jQuery.fn.jquery.split('.')[0]) === 1 || parseInt(jQuery.fn.jquery.split('.')[1]) > 6) {
        jQuery(document).on('click touchstart', '#add_to_cart, .ajax_add_to_cart_button', this.onAddToCart);
    } else {
        jQuery('#add_to_cart, .ajax_add_to_cart_button, .js-increase-product-quantity, .js-decrease-product-quantity, .cart_quantity_up, .cart_quantity_down').live('click touchstart', this.onAddToCart);
    }

    if (typeof prestashop != 'undefined') {
        prestashop.on(
          'updateCart',
          (function (event) {
              this.onAddToCart();
          }).bind(this)
        );
    }
};

ResponsiveMenuCart.prototype.onAddToCart = function() {
    window.setTimeout(function() {
        jQuery.ajax({
            type: 'GET',
            url: RM_AJAX_URL,
            dataType: 'json',
            data: { action: 'cart' }
        }).done(function (data) {
            jQuery('.rm-header .rm-cart .count').text(data.count);

            if (data.count === 0) {
                jQuery('.rm-header .rm-cart .count').hide();
            } else {
                jQuery('.rm-header .rm-cart .count').show();
            }
        });
    }, 500); // Increase this value when your shop is slow
};


