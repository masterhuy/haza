{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.ptrestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<link rel="stylesheet" type="text/css" href="{$urls.theme_assets}css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="{$urls.theme_assets}fontawesome5pro/pro.min.css" />

<link href="{$urls.base_url}modules/jmsthemesetting/views/fonts/font-icon.css" rel="stylesheet">



{if $jmsSetting.body_font == 'google' && isset($jmsSetting.body_font_google)}
<link href="https://fonts.googleapis.com/css?family={$jmsSetting.body_font_google}:{$jmsSetting.body_font_google_weightstyle}" rel="stylesheet">
{elseif $jmsSetting.body_font == 'fontface' && isset($jmsSetting.body_fontface_css)}
<link href="{$urls.base_url}/modules/jmsthemesetting/views/fonts/{$jmsSetting.body_fontface_css}" rel="stylesheet">
{/if}

{if $jmsSetting.heading_font == 'google' && isset($jmsSetting.heading_font_google)}
    <link href="https://fonts.googleapis.com/css?family={$jmsSetting.heading_font_google}:{$jmsSetting.heading_font_google_weightstyle}&display=swap" rel="stylesheet">
{elseif $jmsSetting.heading_font == 'fontface' && isset($jmsSetting.heading_fontface_css)}
    <link href="{$urls.base_url}/modules/jmsthemesetting/views/fonts/{$jmsSetting.heading_fontface_css}" rel="stylesheet">
{/if}

{if $jmsSetting.body_icon_font != ''}
<link href="{$urls.base_url}/modules/jmsthemesetting/views/fonts/{$jmsSetting.body_icon_font}" rel="stylesheet">
{/if}



{foreach $stylesheets.external as $stylesheet}
<link rel="stylesheet" href="{$stylesheet.uri}" type="text/css" media="{$stylesheet.media}">
{/foreach}

{foreach $stylesheets.inline as $stylesheet}
<style>
{$stylesheet.content}
</style>
{/foreach}
{if $jpb_rtl}
<link href="{$urls.theme_assets}css/rtl.css" rel="stylesheet">
{/if}


