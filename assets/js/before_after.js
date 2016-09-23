jQuery(document).ready(function(){

  // Validate SculpSure Form
  var sculpsureForm = jQuery("#sculpsure-contest-form");

  sculpsureForm.validate({
      errorPlacement: function errorPlacement(error, element) { element.before(error); },
      rules: {
          confirm: {
              equalTo: "#password"
          }
      }
  });

  sculpsureForm.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",

      onStepChanging: function (event, currentIndex, newIndex)
      {
          sculpsureForm.validate().settings.ignore = ":disabled,:hidden";
          return sculpsureForm.valid();
      },
      onFinishing: function (event, currentIndex)
      {
          sculpsureForm.validate().settings.ignore = ":disabled";
          return sculpsureForm.valid();
      },
      onFinished: function (event, currentIndex, opts)
      {
          var opts = {
              lines: 9 // The number of lines to draw
            , length: 40 // The length of each line
            , width: 6 // The line thickness
            , radius: 42 // The radius of the inner circle
            , scale: 1 // Scales overall size of the spinner
            , corners: 1 // Corner roundness (0..1)
            , color: '#000' // #rgb or #rrggbb or array of colors
            , opacity: 0.10 // Opacity of the lines
            , rotate: 0 // The rotation offset
            , direction: 1 // 1: clockwise, -1: counterclockwise
            , speed: 1 // Rounds per second
            , trail: 60 // Afterglow percentage
            , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
            , zIndex: 2e9 // The z-index (defaults to 2000000000)
            , className: 'spinner' // The CSS class to assign to the spinner
            , top: '50%' // Top position relative to parent
            , left: '50%' // Left position relative to parent
            , shadow: false // Whether to render a shadow
            , hwaccel: false // Whether to use hardware acceleration
            , position: 'absolute' // Element positioning
          }

          var target = document.getElementById('overlay');
          var spinner = new Spinner(opts).spin(target);
          jQuery("#overlay").show();

          var formData = new FormData(jQuery("#sculpsure-contest-form")[0]);

          var xhr = new XMLHttpRequest();
          xhr.open('POST','https://bacontest.cynosure.horse/entry/create');
          xhr.send(formData);

          xhr.onload = function() {
              spinner.stop();
              jQuery("#overlay").hide();
              //jQuery(".post-content").html('<p id="bac_thank_you">Thank you for submitting your SculpSure Before and After images.</p><p><a href=".">Submit Another Entry</a></p>');
          }

      },

  });

  // Validate Icon Form
  var iconForm = jQuery("#icon-contest-form");
  iconForm.validate({
      errorPlacement: function errorPlacement(error, element) { element.before(error); },
      rules: {
          confirm: {
              equalTo: "#password"
          }
      }
  });
  iconForm.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      onStepChanging: function (event, currentIndex, newIndex)
      {
          iconForm.validate().settings.ignore = ":disabled,:hidden";
          return iconForm.valid();
      },
      onFinishing: function (event, currentIndex)
      {
          iconForm.validate().settings.ignore = ":disabled";
          return iconForm.valid();
      },
      onFinished: function (event, currentIndex, opts)
      {
          var opts = {
              lines: 9 // The number of lines to draw
            , length: 40 // The length of each line
            , width: 6 // The line thickness
            , radius: 42 // The radius of the inner circle
            , scale: 1 // Scales overall size of the spinner
            , corners: 1 // Corner roundness (0..1)
            , color: '#000' // #rgb or #rrggbb or array of colors
            , opacity: 0.10 // Opacity of the lines
            , rotate: 0 // The rotation offset
            , direction: 1 // 1: clockwise, -1: counterclockwise
            , speed: 1 // Rounds per second
            , trail: 60 // Afterglow percentage
            , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
            , zIndex: 2e9 // The z-index (defaults to 2000000000)
            , className: 'spinner' // The CSS class to assign to the spinner
            , top: '50%' // Top position relative to parent
            , left: '50%' // Left position relative to parent
            , shadow: false // Whether to render a shadow
            , hwaccel: false // Whether to use hardware acceleration
            , position: 'absolute' // Element positioning
            }

          var target = document.getElementById('overlay');
          var spinner = new Spinner(opts).spin(target);
          jQuery("#overlay").show();

          var formData = new FormData(jQuery("#icon-contest-form")[0]);

          var xhr = new XMLHttpRequest();
          xhr.open('POST','https://bacontest.cynosure.horse/entry/create');
          xhr.send(formData);

          xhr.onload = function() {
              spinner.stop();
              jQuery("#overlay").hide();
              //jQuery(".post-content").html('<p id="bac_thank_you">Thank you for submitting your Icon Before and After images.</p><p><a href=".">Submit Another Entry</a></p>');
          }
      }
  });

  // Show correct form based on selected device
  jQuery("#bac_select_laser").change(function(){
       var selectedLaser = jQuery("#bac_select_laser").val();
      if (selectedLaser === "default") {
          jQuery("#device-select-error-msg").remove();
          jQuery("#ss_contest_entry, #icon_contest_entry").hide();
          jQuery(".bac_select_laser_container").append("<p id='device-select-error-msg'>Please select a device</p>");

      }
      else if (selectedLaser === "sculpsure"){
          jQuery("#device-select-error-msg").remove();
          jQuery("#icon_contest_entry").hide();
          jQuery("#ss_contest_entry").show();
      } else {
          jQuery("#device-select-error-msg").remove();
          jQuery("#ss_contest_entry").hide();
          jQuery("#icon_contest_entry").show();
      }
  });

  // Show image preview when image selected
  function readURL(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                jQuery(previewId).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Hide image preview until images are selected
    jQuery(".bac_image_preview").hide();

    // Show SculpSure before image
    jQuery("#ss_before_image").change(function(){
        var previewId = "#ss_before_image_preview";
        readURL(this, previewId);
        window.setTimeout(function () {
            jQuery("#ss_before_image_preview").show();
        }, 250);
    });
    // Show SculpSure after image
    jQuery("#ss_after_image").change(function(){
        var previewId = "#ss_after_image_preview";
        readURL(this, previewId);
        window.setTimeout(function () {
            jQuery("#ss_after_image_preview").show();
        }, 250);
    });
    // Show Icon before image
    jQuery("#icon_before_image").change(function(){
        var previewId = "#icon_before_image_preview";
        readURL(this, previewId);
        window.setTimeout(function () {
            jQuery("#icon_before_image_preview").show();
        }, 250);
    });
    // Show Icon after image
    jQuery("#icon_after_image").change(function(){
        var previewId = "#icon_after_image_preview";
        readURL(this, previewId);
        window.setTimeout(function () {
            jQuery("#icon_after_image_preview").show();
        }, 250);
    });


})
