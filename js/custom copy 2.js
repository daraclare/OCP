jQuery(document).ready(function($) {
    "use strict";

    $('#slider ul').roundabout({
        bearing: 0.0,
        tilt: -2.5,
        minZ: 100,
        maxZ: 280,
        minOpacity: 1.0,
        maxOpacity: 1.0,
        minScale: -0.5,
        maxScale: 1.0,
        duration: 600,
        btnNext: ".slider_next",
        btnNextCallback: function() {},
        btnPrev: ".slider_previous",
        btnPrevCallback: function() {},
        btnToggleAutoplay: null,
        btnStartAutoplay: null,
        btnStopAutoplay: null,
        easing: "swing",
        clickToFocus: true,
        clickToFocusCallback: function() {},
        focusBearing: 0.0,
        shape: "lazySusan",
        debug: false,
        childSelector: "li",
        startingChild: null,
        reflect: false,
        floatComparisonThreshold: 0.001,
        autoplay: true,
        autoplayDuration: 4000,
        autoplayPauseOnHover: true,
        autoplayCallback: function() {},
        autoplayInitialDelay: 0,
        enableDrag: true,
        dropDuration: 600,
        dropEasing: "swing",
        dropAnimateTo: "nearest",
        dropCallback: function() {},
        dragAxis: "x",
        dragFactor: 4,
        triggerFocusEvents: true,
        triggerBlurEvents: true,
        responsive: true
    });

    $(function(){
        $('#main_menu').superfish({
            delay:          300,
            animation:      {opacity:'show',height:'show'},
            animationOut:   {height:'hide'},
            speed:          'fast',
            speedOut:       'fast',            
            cssArrows:      false, 
            disableHI:      true /*load hoverIntent.js in header to use this option*/
        });
    });
    
    $('#main_menu_select').on('change', function() {
      window.location = $(this).val();
    });

    $(".meter > span").width(0);
    $(".meter > span").one('inview', function(event, isInView) {
      if (isInView) {
        var newwidth = $(this).data("percentage") + '%';
        $(this).animate({width: newwidth}, {
            duration:1500,
            step: function(now) {
                   $(this).html(Math.round(now) + '%');
            }
        });
      }
    });

   

    $(".submit").click(function () {
        $(this).closest("form").submit();
    });

    $(".widget_search i").click(function () {
        $(this).closest("form").submit();
    });


    //Contact form
    jQuery("#contact_form form").submit(function() {
        var str = jQuery(this).serialize();                  
        jQuery.ajax({
            type: "POST",
            url: "http://www.oconnorplumbing.ie/php/sendmail.php",
            data: str,
            success: function(msg){
                var result;
                    if(msg === "OK"){
                        result = "<div class='alert-success'>Your message has been successfully sent! We will be in touch shortly.</div>";
                        var yPos = jQuery("#contact_form form").offset().top;
                        yPos=yPos-100;
                        jQuery("#contact_form form").animate({ height: '0px' }, 1000, function() {
                            jQuery(this).hide();
                        });
                    }
                    else {
                        $('.field_error').removeClass('field_error');
                        var errors = msg.split(",");
                        var i;
                        for (i = 0; i < errors.length; ++i) {
                            $('#' + errors[i]).addClass('field_error');
                        }
                        result = "<div class='alert-warning'>Correct input is required in marked fields!</div>";
                    }
                jQuery('.submit_note').html(result);
            }                    
        });                  
        return false;
    });         

    var waitForFinalEvent = (function () {
      var timers = {};
      return function (callback, ms, uniqueId) {
        if (!uniqueId) {
          uniqueId = "Don't call this twice without a uniqueId";
        }
        if (timers[uniqueId]) {
          clearTimeout (timers[uniqueId]);
        }
        timers[uniqueId] = setTimeout(callback, ms);
      };
    })();

    $(window).resize(function () {
        waitForFinalEvent(function(){
              $('#slider ul .roundabout-moveable-item').removeAttr("style");
              $('#slider ul').roundabout({
                tilt: -2.5,
                minOpacity: 1.0,
                maxOpacity: 1.0,
                minScale: -0.5,
                maxScale: 1.0,
                duration: 600,
                btnNext: ".slider_next",
                btnPrev: ".slider_previous",
                clickToFocus: true,
                childSelector: "li",
                autoplayPauseOnHover: true,
                responsive: true
              });
        }, 300, "main slider unique id");

        //re-center map on resize
        $('#map').gMap('centerAt', { latitude: 48.8560848, longitude: 2.357145, zoom: 16 });
    });

});