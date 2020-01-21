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
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<style>
	.jms-popup-wrap {
		width : {$video_width}px;
		height : {$video_height}px;
	}
</style>

{if $product_videos}
<div class="jms-videos" id="jmsproductvideo">
	{foreach $product_videos as $video}
		<div class="jms-video {if $video_show == '1'}popup-active{/if}">
			<div class="addon-title">
				<h3>
					<p>{$video.title}</p>
				</h3>
			</div>
			{if $video_show == '1'}
				<div class="jms-popup-box">
					<div class="jms-popup-wrap">
						<a class="popup_close"><i class="ptw-icon icon-closed_light"></i></a>
						{foreach $video.links as $video_link}
							{if $video_link|strpos:'youtube' !== false}
							<iframe width="{$video_width}" height="{$video_height}" src="https://www.youtube-nocookie.com/embed/{$video_link|substr:($video_link|strpos:'?v='+3)}?rel=0&amp;controls=0&amp;showinfo=0{if $video_autoplay}&amp;autoplay=1{/if}" frameborder="0" allowfullscreen></iframe>
							{else}
							{assign var=count_ value = ("/"|explode:$video_link)}
								<iframe src="https://player.vimeo.com/video/{$count_[$count_|count-1]}{if $video_autoplay}?autoplay=1{/if}" width="{$video_width}" height="{$video_height}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							{/if}
						{/foreach}
					</div>
					<div class="jms-popup-overlay" style="display:none;opacity:0;"></div>
				</div>
			{else}
				{foreach $video.links as $video_link}
					{if $video_link|strpos:'youtube' !== false}
						<iframe width="{$video_width}" height="{$video_height}" src="https://www.youtube-nocookie.com/embed/{$video.link|substr:($video_link|strpos:'?v='+3)}?rel=0&amp;controls=0&amp;showinfo=0{if $video_autoplay}&amp;autoplay=1{/if}" frameborder="0" allowfullscreen></iframe>
					{else}
						{assign var=count_ value = ("/"|explode:$video_link)}
						<iframe src="https://player.vimeo.com/video/{$count_[$count_|count-1]}{if $video_autoplay}?autoplay=1{/if}" width="{$video_width}" height="{$video_height}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					{/if}
				{/foreach}
			{/if}
		</div>
	{/foreach}
</div>
{/if}
