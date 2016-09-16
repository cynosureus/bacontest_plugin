jQuery(document).ready(function(){

    jQuery("button").click(function(){
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
    });

});
