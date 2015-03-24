/**
 * Created by akel on 3/16/15.
 */
jQuery(document).ready(function($) {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_upload_preview').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputFile").change(function () {
        readURL(this);
    });

    function readURLMultiple(input) {
        if (input.files && input.files) {

            for (var i = 0; i < input.files.length; i++){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#small_images_list').append('<div style="width:150px; height: 150px; border: 1px solid #e74c3c; float: left;">'+
                    '<img src="'+e.target.result+'" style="max-width:100%;max-height:100%;" >'+ '</div>')
                };
                reader.readAsDataURL(input.files[i]);
            }
        }
    }

    $("#inputFileMultiple").change(function () {
        readURLMultiple(this);
    });
});