const configSettings = {
    cloud_name: 'coschedule-integrations',
    upload_preset: 'codepen'
  }

$.cloudinary.config(configSettings);

$(document).ready(function() {

  if ($.fn.cloudinary_fileupload !== undefined) {
      
    
   $("input.form-file-input[type=file]").attr("data-form-data", JSON.stringify(configSettings));
    

    $("input.form-file-input[type=file]").cloudinary_fileupload().bind('fileuploadadd', function (e, data) {
      var ajax = data.submit();
    })
     .bind("cloudinarydone", function(e, data) {
      $(".thumbnails").append(
        $.cloudinary.image(data.result.public_id, {
          format: "jpg",
         width: 100,
          height: 100
        })
      );
    })
      .bind("cloudinaryprogress", function(e, data) {});

  };


});