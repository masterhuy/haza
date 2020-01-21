"use strict";

var RmTabs = function() {
    this.tabList = [
        {
            id: 'configuration',
            target: [
                '#configuration_form'
            ]
        },
        {
            id: 'theme',
            target: [
                '#theme_form'
            ]
        },
        {
            id: 'link',
            target: [
                '#links_form',
                '#form-link'
            ]
        },
        {
            id: 'category',
            target: [
                '#category_form',
                '#form-responsivemenu_category'
            ]
        }
    ];

    this.currentTab = 'configuration';
    if (typeof localStorage != 'undefined') {
        var tab = localStorage.getItem('rmTab')
        if (tab) {
            this.currentTab = tab;
        }
    }

    this.render();

    jQuery('.js-tab').click((function(e) {
        this.currentTab = jQuery(e.target).data('target');
        this.render();
        if (typeof localStorage != 'undefined') {
            localStorage.setItem('rmTab', this.currentTab)
        }
    }).bind(this));
};

RmTabs.prototype.render = function() {
    jQuery('.js-tab').each((function(key, target) {
        var $tab = jQuery(target);
        var classList = $tab.attr('class').split(' ');
        for (var i in classList) {
            if (!classList[i].match(/--selected$/)) {
                if ($tab.data('target') == this.currentTab) {
                    $tab.addClass(classList[i] + '--selected');
                }
            } else {
                $tab.removeClass(classList[i]);
            }
        }
    }).bind(this));

    for (var i in this.tabList) {
        var tab = this.tabList[i];

        for (var j in tab.target) {
            var target = tab.target[j];

            if (tab.id == this.currentTab) {
                jQuery(target).show();
            } else {
                jQuery(target).hide();
            }
        }
    }
};
