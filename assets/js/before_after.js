jQuery(document).ready(function(){

  // Validate SculpSure Form
  var sculpsureForm = jQuery("#sculpsure-contest-form");

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
              jQuery(".post-content").html('<p>Thank you for submitting your SculpSure Before and After images.</p><p><a href=".">Submit Another Entry</a></p>');
          }

        //   jQuery.ajax(
        //       {
        //           url: "https://bacontest.cynosure.horse/submission",
        //           success: function(result)
        //           {
        //               console.log(result);
        //           },
        //           data: FormData,
        //           type: 'POST',
        //           cache: false,
        //           contentType: false,
        //           processData: false
        //       }
        //   )
          //console.log("SculpSure Form Submitted!");
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
              jQuery(".post-content").html('<p>Thank you for submitting your Icon Before and After images.</p><p><a href=".">Submit Another Entry</a></p>');
          }
      }
  });

  // Show correct form based on selected Laser
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

})
