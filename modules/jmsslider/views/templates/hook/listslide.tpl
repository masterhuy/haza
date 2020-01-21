{**
* 2007-2017 PrestaShop
*
* Slider Layer module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*}
<script type="text/javascript">
            $(function() {
                var $mySlides = $("#slides");
                $mySlides.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateSlidesOrdering&secure_key="+secure_key;
                        $.post("{$root_url nofilter}modules/jmsslider/ajax_jmsslider.php?" + order);
                        }
                    });
                $mySlides.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
</script>
<div class="panel">
    <h3>
    <span title="" data-toggle="tooltip" class="label-tooltip toogle" data-original-title="Click to Toggle" data-html="true">
        <i class="icon-list-ul"></i> {l s='Slides list' d='Modules.JmsSlider'}
    </span>
    </h3>
    <script>
    $(document).ready(function(){
        $('.toogle').click(function(e){
            $('#slidesContent').toggle(200);
        });
    });

    </script>
    <div id="slidesContent">
        <div id="slides">
            {foreach from=$slides item=slide}
            <div id="slides_{$slide->id}" class="panel" style="{if $slide->bg_type}background-image: url('{$img_dir}slides/{$slide->bg_image}');{else}background-color: {$slide->bg_color} {/if}">
                <div class="title">
                    <span class="slider-name">#{$slide->id}-{$slide->title}</span>
                    <div class="button">
                        <a href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&editSlide=1&id_slide={$slide->id}"><i title="edit" class="material-icons action">mode_edit</i></a>
                        <a onclick="if(confirm('Are you sure want to remove this slide?')) { document.location='{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&delete_id_slide={$slide->id}'; } else { return true;}" ><i title="delete" class="material-icons action">delete</i></a>
                        <a href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&copySlide=1&id_slide={$slide->id}"><i title="duplicate" class="icon-copy action"></i></a>
                        <a href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&changeStatus&id_slide={$slide->id}"><i title="{if $slide->status}enable{else}disable{/if}" class="icon-{if $slide->status}check{else}remove{/if}"></i></a>
                    </div>


                </div>
            </div>
            {/foreach}
            <a href="{$link->getAdminLink('AdminModules') nofilter}&configure=jmsslider&addSlide&id_slider={$slider->id}" title="{l s='Add Slide' d='Modules.JmsSlider'}">
                <div class="panel" style="background-image: url('{$img_dir}settings/new_slider.png');background-size: unset;">
                    <div class="title">
                        <span>New Slide</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>