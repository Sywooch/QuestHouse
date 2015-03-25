$(document).ready(function() {

    $('.date-pick').datepicker().on('changeDate', function(ev) {
        $.post('quest/update-main-table', {
            datePickerDate:$('#quest-date').val()
            }, function(data) {
            if (data){
                $("#booking-table").html(data);
            }

            }).fail(function(error) {

                alert ("update table error");
                console.log (error);

        });
    });

    $(document.body).on('click', '#removeBooking' ,function(){

        if (confirm('Действительно удалить бронь ?')) {
            $.post('profile/remove-user-booking', {
                reserved:$(this).parents('li').attr('id')
            }, function(data) {

                if (data){
                    $('#content_profile').html(data);
                }

            }).fail(function(error) {

                alert ("update table error");
                console.log (error);

            });
        }
    });

    $(document.body).on('click', '.timeContainer' ,function(){

        if (!$('#quest-date').val()){
            $.cookie('date', $(this).attr('id'));
        } else {
            $.cookie('date', $('#quest-date').val());
        }

        $.cookie('time', $(this).children('#time-value').text());
        $.cookie('price', $(this).children('#quest-price').text());
        $.cookie('quest-name', $(this).parents('.quest_booking').attr('name'));

        var _self = this;
        checkUserStatus(function(status){
            if (status != 1) {
                if (!$('#quest-date').val()){
                    //$.cookie('date', $(this).attr('id'));
                    $('#b-date').text($(_self).attr('id'));
                } else {
                    //$.cookie('date', $('#quest-date').val());
                    $('#b-date').text($('#quest-date').val());
                }

                $('#b-time').text($(_self).children('#time-value').text());
                $('#b-price').text($(_self).children('#quest-price').text());
                $('#b-quest-name').text($(_self).parents('.quest_booking').attr('name'));
                $('#booking-modal').modal('show');
            } else  {
                $('#login-register-modal').modal('show');
            }
        });

    });

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

    ////////////////////////////////////////////////////////////
    //$("#modal-login-form").submit(function(event) {
    $(document.body).on('submit', '#modal-login-form' ,function(event){
        var url = "login"; // the script where you handle the form input.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#modal-login-form").serialize(), // serializes the form's elements.
            success: function(data)
            {
                if (data!== 'false') {
                    alert ("успешная авторизация");
                    $('#b-date').text($.cookie('date'));
                    $('#b-time').text($.cookie('time'));
                    $('#b-price').text($.cookie('price'));
                    $('#b-quest-name').text($.cookie('quest-name'));
                    $('#login-register-modal').modal('hide').delay( 3000 );
                    $('#booking-modal').modal('show');
                } else {
                    alert ("fail");
                    /*$('#login-fail').show();
                    $('#login-success').hide();*/
                }
            }
        });
        event.preventDefault();
        //return false; // avoid to execute the actual submit of the form.
    });


    //$("#modal-register-form").submit(function() {
    $(document.body).on('submit', '#modal-register-form' ,function(event){
        var url = "signup"; // the script where you handle the form input.
        $.ajax({
            type: "POST",
            url: url,
            data: $("#modal-register-form").serialize(), // serializes the form's elements.
            success: function(data)
            {
                if (data) {
                    alert ("успешная регистрация");
                    $('#b-date').text($.cookie('date'));
                    $('#b-time').text($.cookie('time'));
                    $('#b-price').text($.cookie('price'));
                    $('#b-quest-name').text($.cookie('quest-name'));
                    $('#login-register-modal').modal('hide');
                    $('#booking-modal').modal('show');
                } else {
                    alert ("net");
                }
            }
        });

        event.preventDefault();
    });
    ////////////////////////////////////////////////////////////

    function checkUserStatus(cb){
        $.post( "site/is-logged-in",
            {

            }, function(data) {

                cb(data);

            }).fail(function(error) {

                alert ("Booking error");
                console.log (error);

            });
    }

    $(document.body).on('click', '#confirm-booking' ,function(){
        makeBooking($('#b-time').text(),$('#b-date').text(),$('#b-quest-name').text());
    });

    function makeBooking(time,date,quest){

        $.post( "quest/checktime",
            {
                time: time,
                date: date,
                quest: quest,
                table_type: 'all'

            }, function(data) {
                //alert (data);
                if (data) {
                    $('#booking-modal').modal('hide');
                    $('#booking-modal').on('hidden.bs.modal', function () {
                        $("#booking-table").html(data);
                    })
                }
            }).fail(function(error) {

                alert ("Booking error");
                console.log (error);

            });
    }

});