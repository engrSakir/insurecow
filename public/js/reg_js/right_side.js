function readURL3(input) {
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.image3-upload-wrap').hide();
        $('.file3-upload-image').attr('src', e.target.result);
        $('.file3-upload-content').show();
  
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload3();
    }
  }
  
  function removeUpload3() {
    $('.file3-upload-input').replaceWith($('.file3-upload-input').clone());
    $('.file3-upload-content').hide();
    $('.image3-upload-wrap').show();
  }
  $('.image3-upload-wrap').bind('dragover', function () {
          $('.image3-upload-wrap').addClass('image-dropping');
      });
      $('.image3-upload-wrap').bind('dragleave', function () {
          $('.image3-upload-wrap').removeClass('image-dropping');
  });
  