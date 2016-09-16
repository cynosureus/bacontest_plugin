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
      onFinished: function (event, currentIndex)
      {
          //var tData = JSON.stringify(jQuery(".ss_treatment_details").serializeArray());

          jQuery.ajax(
              {
                  url: "https://bacontest.cynosure.horse/data-test",
                  success: function(result)
                  {
                      console.log(result);
                  },
                  data: jQuery("#sculpsure-contest-form").serialize(),
                  type: 'POST'
              }

          );
          console.log("SculpSure Form Submitted!");
      }
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
      onFinished: function (event, currentIndex)
      {
          jQuery.ajax(
              {
                  url: "https://bacontest.cynosure.horse/data-test",
                  success: function(result)
                  {
                      console.log(result);
                  },
                  type: 'POST'
              }
          );
          console.log("Icon Form Submitted!");
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
