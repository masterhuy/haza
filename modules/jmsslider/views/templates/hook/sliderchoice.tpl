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
<div class="defaultForm form-horizontal">
    <input type="hidden" name="chooseSlider" value="1">
    <input type="hidden" name="site_url" id="site_url" value="{$root_url nofilter}" />
    <div class="panel" id="fieldset_0">
        <div class="panel-heading">
            <i class="icon-cogs"></i>{l s='Display' d='jmsslider'}
        </div>
        <div class="form-wrapper">
             <div class="form-group">
                <label class="control-label col-lg-3">{l s='Select Slider' d='jmsslider'}</label>

                <div class="col-lg-9">
                    <select data-placeholder="{l s='Select Sliders' d='jmsslider'}" multiple class="chosen-select" name="select-slider" id="select-slider">
                        {foreach $sliders as $slider}
                            <option value="{$slider->id}" >{$slider->title}</option>
                        {/foreach}
                    </select>
                    <a class="btn btn-default addDisplay">
                        <i class="icon-plus"></i>
                        Add
                    </a>
                    <p class="help-block">{l s='Select sliders to display in front store.' d='jmsslider'}</p>
                </div>

            </div>
        </div>
        <div class="displaylist" style="width : 60%; margin: auto">
        {foreach $displays as $display}
            {include './display_row.tpl'}

        {/foreach}
        </div>
    </div>
</div>