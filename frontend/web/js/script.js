$(document).ready(function() {

    /*$(".timeContainer").click(function() {

        var r = confirm("Бронировать ?");
        if (r == true) {
            var jqxhr = $.post( "quest/checktime",
                {
                    time: $(this).text(),
                    date: $(this).parent().attr('id'),
                    quest: $('.quest_booking').attr('name')
                }, function(data) {

                    alert (data);

                }).fail(function(error) {

                    console.log (error);

                });
        }

    });*/

    $( window).load(function(){

        var x = ($(window).height() - 120) / 5;

        $('.owl-cap-title.fittext').css('font-size',x + 'px');

        if ($( window ).width() > $( window ).height()) {
            $('.owl-wrapper-outer').height($(window).height() - 120);
            $('.top-area.show-onload').height($(window).height() - 120);
            $('.owl-item').height($(window).height() - 120);


        } else {
            /*$('.owl-wrapper-outer').height($(window).width() - 120);
             $('.top-area.show-onload').height($(window).width() - 120);
             $('.owl-item').height($(window).width() - 120);*/

            $('.owl-wrapper-outer').height($(window).width() / 4 * 3);
            $('.top-area.show-onload').height($(window).width() / 4 * 3);
            $('.owl-item').height($(window).width() / 4 * 3);


        }
    });

    $( window ).resize(function() {

        var x = ($(window).height() - 120) / 2;
        $('.owl-cap-title.fittext').css('font-size',x + 'px');

        if ($( window ).width() > $( window ).height()) {
            $('.owl-wrapper-outer').height($(window).height() - 120);
            $('.top-area.show-onload').height($(window).height() - 120);
            $('.owl-item').height($(window).height() - 120);



        } else {
            $('.owl-wrapper-outer').height($(window).width() - 120);
            $('.top-area.show-onload').height($(window).width() - 120);
            $('.owl-item').height($(window).width() - 120);


        }
    });

    $('#modalButton').click(function (){

        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });

});