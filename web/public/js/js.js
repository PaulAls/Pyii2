/**
 * Created by Paul on 09.03.2017.
 */

$(function () {

    $('#w0').submit(function () {

        var $form = $(this);
        $.ajax({
            type: 'POST',
            url: '/site/message',
            data: $form.serialize()
        }).done(function (data) {
            var countLi = $('li.menu-commet-li').size();
            if (countLi >= 4){
                $('.menu-commet-li:last').remove();
            }

            $('#menu-add-comment:first').prepend(" <li id='menu-add-comment' class='menu-commet-li'>" +
                "<div class='menu-add-comment-wrap'>" +
                "<div class='photo-wrap text-right'>" +
                "<a href='#' id='menu-add-comment-photo'><img width='50' style='border-radius: 5px;'" +
                "src='" +
                data.photo +
                "' alt=''></a>" +
                "</div>" +
                "<div class='message-wrap text-right'>" +
                "<a href='#' id='menu-add-comment-name'>" +
                data.user_name +
                "</a>" +
                "<p id='menu-add-comment-note'>" +
                data.message +
                "</p>" +
                "</div>" +
                "</div>" +
                "</li>");

        });
        $('#chatform-message').val('');
        return false;
    });



});