/**
* 2007-2017 PrestaShop
*
* Slider Layer module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/
function getParentByClassName(element, parent) {
    while (element.className.indexOf(parent)) {
        element = element.parentElement;
    }
    return element;
}
function openCity(element, cityName) {
    inner = getParentByClassName(element, 'inner');
    var i, tabcontent, tablinks;
    tabcontent = inner.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = inner.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    element.className += " active";
}
$(document).ready(function () {
    $('.defaultOpen').click();
})
