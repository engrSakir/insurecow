function readURL5(input) {
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.image5-upload-wrap').hide();
        $('.file5-upload-image').attr('src', e.target.result);
        $('.file5-upload-content').show();
  
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload5();
    }
  }
  
  function removeUpload5() {
    $('.file5-upload-input').replaceWith($('.file5-upload-input').clone());
    $('.file5-upload-content').hide();
    $('.image5-upload-wrap').show();
  }
  $('.image5-upload-wrap').bind('dragover', function () {
          $('.image5-upload-wrap').addClass('image-dropping');
      });
      $('.image5-upload-wrap').bind('dragleave', function () {
          $('.image5-upload-wrap').removeClass('image-dropping');
  });
  