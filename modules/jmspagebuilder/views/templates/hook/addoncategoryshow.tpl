{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if isset($category)}
	{if $show_img == 1}
	{assign var='categoryLink' value=$link->getcategoryLink($category.id_category, $category.link_rewrite)}
	{assign var='categoryname' value=$category.name[$language.id]}
<div class="category-box">
	<div class="category-thumb">
		<a href="{$categoryLink nofilter}" title="{$categoryname nofilter}" class="category_image">
			<img src="{$link->getCatImageLink($category.link_rewrite, $category.id_image)|escape:'html':'UTF-8'}" alt="{$categoryname nofilter}" title="{$categoryname nofilter}" class="img-responsive"/>
		</a>
	</div>
	{/if}
	<h3 class="parent-category">
		<a href="{$categoryLink nofilter}" title="{$categoryname nofilter}">{$categoryname nofilter}</a>
	</h3>
	{if !empty(childs)}
		<ul class="child-categories">
			{foreach from=$childs item=c}
				{assign var='categoryLink' value=$link->getcategoryLink($c.id_category, $category.link_rewrite)}
				<li>
					<a href="{$categoryLink nofilter}" title="{$c.name nofilter}">{$c.name nofilter}</a>
				</li>
			{/foreach}
		</ul>
	{/if}
</div>
{else}
	<p>{l s='No sub categories' d='Modules.JmsPagebuilder'}</p>
{/if}
