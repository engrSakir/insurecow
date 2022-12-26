function readpdfURL(input) {
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.pdf-upload-wrap').hide();
        $('.pdf-upload-image').attr('src', e.target.result);
        $('.pdf-upload-content').show();
  
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removepdfUpload();
    }
  }
  
  function removepdfUpload() {
    $('.pdf-upload-input').replaceWith($('.pdf-upload-input').clone());
    $('.pdf-upload-content').hide();
    $('.pdf-upload-wrap').show();
  }
  $('.pdf-upload-wrap').bind('dragover', function () {
          $('.pdf-upload-wrap').addClass('image-dropping');
      });
      $('.pdf-upload-wrap').bind('dragleave', function () {
          $('.pdf-upload-wrap').removeClass('image-dropping');
  });

  
  