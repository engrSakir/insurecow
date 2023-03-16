function readURL6(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image6-upload-wrap').hide();
            $('.file6-upload-image').attr('src', e.target.result);
            $('.file6-upload-content').show();

        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload6();
    }
}

function removeUpload6() {
    $('.file6-upload-input').replaceWith($('.file6-upload-input').clone());
    $('.file6-upload-content').hide();
    $('.image6-upload-wrap').show();
}
$('.image6-upload-wrap').bind('dragover', function () {
    $('.image6-upload-wrap').addClass('image-dropping');
});
$('.image6-upload-wrap').bind('dragleave', function () {
    $('.image6-upload-wrap').removeClass('image-dropping');
});
