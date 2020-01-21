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

<div id="layer-tools" class="layer-tools">
    <div id="add-layer-wrap">
        <a class="btn btn-default" id="add-layer">
            <i class="material-icons">add</i> {l s='Add Layer' d='jmsslider'}
        </a>
        <ul class="add-layer-list">
            <li><a id="add-text"><i class="material-icons">assignment</i> {l s='Text' d='jmsslider'}</a></li>
            <li><a id="add-image"><i class="material-icons">collections</i> {l s='Image' d='jmsslider'}</a></li>
            <li><a id="add-video"><i class="material-icons">video_librarys</i> {l s='Video' d='jmsslider'}</a></li>
            <!-- <li><a id="add-link"><i class="material-icons">add</i> {l s='Link' d='jmsslider'}</a></li> -->
        </ul>
    </div>
        {include './quick-layer-list.tpl'}
    <a class="btn btn-default pull-right mobile-style"><i class="material-icons" style="transform: rotateZ(90deg)">
tablet</i></i> {l s='Mobile Style 2' d='jmsslider'}</a>
    <a class="btn btn-default pull-right mobile2-style"><i class="material-icons" style="transform: rotateZ(90deg)">
tablet</i></i> {l s='Mobile Style' d='jmsslider'}</a>
    <a class="btn btn-default pull-right tablet-style"><i class="material-icons">tablet_mac</i> {l s='Tablet Style' d='jmsslider'}</a>
    <a class="btn btn-default pull-right desktop-style btn-active"><i class="material-icons">desktop_windows</i> {l s='Desktop Style' d='jmsslider'}</a>
</div>