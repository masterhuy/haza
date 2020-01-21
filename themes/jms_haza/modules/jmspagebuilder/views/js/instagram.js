
    $(document).ready(function() {
    /* Apply fancybox to multiple items */
        let blockInstaSettings = window.blockInstaSettings;
        insta_container = $(".instagram_block .instagram-carousel");
        insta_container.each((key, e) => {
            let index = $(e).data('index');
            $(e).instagram({
                accessToken: blockInstaSettings[index].accessToken
                , clientId: blockInstaSettings[index].clientId
                // , hash: hash
                , userId: blockInstaSettings[index].userId
                // , next_url: insta_next_url
                , show: blockInstaSettings[index].count
                // , image_size: image_size
                , onComplete: function (photos, data) {
                    // $(e).fancybox();
                    console.log(e, index);
                    $(e).owlCarousel({
                        responsiveClass:true,
                        responsive:{
                            1199:{
                                items:blockInstaSettings[index].count//{$count|escape:'htmlall':'UTF-8'}
                            },
                            991:{
                                items:5
                            },
                            768:{
                                items:3
                            },
                            318:{
                                items:2
                            }
                        },
                    });
                }
            });
        })
    });



(function ($) {
    $.fn.instagram = function (options) {
        var that = this,
            apiEndpoint = "https://api.instagram.com/v1",
            settings = {
                hash: null
                , userId: null
                , locationId: null
                , search: null
                , accessToken: null
                , clientId: null
                , show: null
                , onLoad: null
                , onComplete: null
                , maxId: null
                , minId: null
                , next_url: null
                , image_size: null
                , photoLink: true
            };

        options && $.extend(settings, options);

        function createPhotoElement(photo) {
            var url =
                settings.image_size == 'thumbnail'
                    ? photo.images.thumbnail.url
                    : settings.image_size == 'standard_resolution'
                    ? photo.images.standard_resolution.url
                    : photo.images.low_resolution.url;


            var caption = photo.caption == null ? '' : $.trim(photo.caption.text);

            var innerHtml = $('<a>');

            if (blockInstaSettings.embedSite) {
                innerHtml
                    .attr('href', photo.link + 'embed')
                    .attr('data-fancybox-type', 'iframe');
            } else {
                innerHtml
                    .attr('href', photo.images.standard_resolution.url)
                    .attr('title', caption);
            };

            innerHtml
                .attr('class', 'instagram_elements')
                .attr('data-fancybox-group', 'gallery')
                .append($('<img>').addClass('instagram-image')
                    .attr('src', url));
            innerHtml
                .append($('<span>').addClass('number-likes fa fa-heart-o').html(photo.likes.count))
                .append('<span class="number-comments fa fa-comments-o"><i class="insta_heart"></i> ' + photo.comments.count +'</span>');

            var MAX_CAPTION_LEN = 70;
            var title = caption.substring(0, MAX_CAPTION_LEN)
                    .split(" ").slice(0, -1).join(" ") + (caption.length > MAX_CAPTION_LEN ? "..." : "");

            var date = new Date(photo.created_time * 1000);

            var info = blockInstaSettings.showCaption
                ? $('<div>')
                .addClass('instaInfoBlock')
                .append($('<span>')
                    .addClass('instaDate')
                    .append('<span class="day">' + date.getDate().toString() + '</span>')
                    .append('<span class="month">' + blockInstaSettings.monthNames[date.getMonth()] + '</span>')
                    .append('<span class="year">' + date.getFullYear().toString() + '</span>')
            )
                .append('<span class="caption">' + title + '</span>')
                : '';

            return $('<div>')
                .addClass(blockInstaSettings.divClass)
                .attr('id', photo.id)
                .append(innerHtml, info);
        }

        function createEmptyElement() {
            return $('<div>')
                .addClass('instagram-placeholder')
                .attr('id', 'empty')
                .append($('<p>').html('No photos for this query'));
        }

        function composeRequestURL() {

            var url = apiEndpoint,
                params = {};

            if (settings.next_url != null) {
                return settings.next_url;
            }

            if (settings.hash != null) {
                url += "/tags/" + settings.hash + "/media/recent";
            }
            else if (settings.search != null) {
                url += "/media/search";
                params.lat = settings.search.lat;
                params.lng = settings.search.lng;
                settings.search.max_timestamp != null && (params.max_timestamp = settings.search.max_timestamp);
                settings.search.min_timestamp != null && (params.min_timestamp = settings.search.min_timestamp);
                settings.search.distance != null && (params.distance = settings.search.distance);
            }
            else if (settings.userId != null) {
                url += "/users/" + settings.userId + "/media/recent";
            }
            else if (settings.locationId != null) {
                url += "/locations/" + settings.locationId + "/media/recent";
            }
            else {
                url += "/media/popular";
            }

            settings.accessToken != null && settings.accessToken != "" && (params.access_token = settings.accessToken);
            settings.clientId != null && settings.clientId != "" && (params.client_id = settings.clientId);
            settings.minId != null && (params.min_id = settings.minId);
            settings.maxId != null && (params.max_id = settings.maxId);
            settings.show != null && (params.count = settings.show);

            url += "?" + $.param(params);

            return url;
        }

        settings.onLoad != null && typeof settings.onLoad == 'function' && settings.onLoad();

        $.ajax({
            type: "GET",
            dataType: "jsonp",
            cache: false,
            url: composeRequestURL(),
            success: function (res) {
                var length = typeof res.data != 'undefined' ? res.data.length : 0;
                var limit = settings.show != null && settings.show < length ? settings.show : length;

                if (limit > 0) {
                    for (var i = 0; i < limit; i++) {
                        that.append(createPhotoElement(res.data[i]));
                    }
                }
                else {
                    that.append(createEmptyElement());
                }

                settings.onComplete != null && typeof settings.onComplete == 'function' && settings.onComplete(res.data, res);
            }
        });

        return this;
    };
})(jQuery);
