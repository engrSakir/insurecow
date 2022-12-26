function readURL4(input) {
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.image4-upload-wrap').hide();
  
        $('.file4-upload-image').attr('src', e.target.result);
        $('.file4-upload-content').show();
  
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload4();
    }
  }
  
  function removeUpload4() {
    $('.file4-upload-input').replaceWith($('.file4-upload-input').clone());
    $('.file4-upload-content').hide();
    $('.image4-upload-wrap').show();
  }
  
  $('.image4-upload-wrap').bind('dragover', function () {
          $('.image4-upload-wrap').addClass('image-dropping');
      });
      $('.image4-upload-wrap').bind('dragleave', function () {
          $('.image4-upload-wrap').removeClass('image-dropping');
  });
  