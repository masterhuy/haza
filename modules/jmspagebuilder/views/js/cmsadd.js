document.addEventListener("DOMContentLoaded", function (event) {
    $(document).ready(function () {
        AddPageCmsButton = (function () {
            var $btnTemplate = $('#tmpl-btn-add-page-cms');
            var $cmsPageContent =  $("#cms_page_content");
            function init() {
                $cmsPageContent.prepend($btnTemplate.html());
            }
            return {init: init};
        })();
        AddPageCmsButton.init();
    });
    $(document).on('click','.add-page',function(event) {
        if($('#page_id').val()) {
            var shortcode = '[jmspagebuilder page_id=' +  $('#page_id').val() + ']';

            /*var child = document.createElement('div');
            child.innerHTML = shortcode;
            //child = child.firstChild;
            var player = $('.translationsFields .active iframe');
            var iframeDocument = player[0].contentDocument || player[0].contentWindow.document;
            if (iframeDocument) {
                var iframeContent = iframeDocument.getElementsByTagName('body');
                console.log(iframeContent);
                iframeContent[0].appendChild(child);
            }*/
            tinymce.activeEditor.execCommand('mceInsertContent', false, shortcode);
        }
        return;
    });
});
