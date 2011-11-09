function ReplaceAll(Source, stringToFind, stringToReplace) {
    var temp = Source;
    var index = temp.indexOf(stringToFind);
    while (index != -1) {
        temp = temp.replace(stringToFind, stringToReplace);
        index = temp.indexOf(stringToFind);
    }
    return temp;
}
function gotoGetit() {
    var what = jQuery('#what').val().trim();
    if (what == 'Enter Keyword') {
        what = ''
    }
    if (what) {
        what = ReplaceAll(what, ' ', '-')
        var location = 'http://www.getit.in/keywords/' + what + '/kolkata';
        window.open(location)
    } else {
        alert('Please enter a keyword');
    }
    return false;
}

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-10585126-14']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
jQuery(document).ready(function() {
    var rightArrow = $("#rightArrow").val();
    var leftArrow = $("#leftArrow").val();
    $('#bottomSlider').anythingSlider({
        showMultiple: 1,
        changeBy: 1,
        buildArrows: false,
        buildNavigation: false,
        infiniteSlides: true,
        autoPlayLocked: true,
        delay: 3000,
        width:600,
        resumeDelay: 5000,


        // Callback when the plugin finished initializing
        onInitialized: function(e, slider) {
            slider.$controls
                .prepend('<ul style="left: -47px;"><li><a class="prev" ><img src="' + leftArrow + '"/></a></li></ul>')
                .append('<ul style="left: 716px;"><li><a class="next"><img src="' + rightArrow + '"/></a></li></ul>')
                .find('.prev, .next').click(function() {
                    if ($(this).is('.prev')) {
                        slider.goBack();
                    } else {
                        slider.goForward();
                    }
                });
        }
    });
    $('#rightlider').anythingSlider({
        showMultiple: 1,
        changeBy: 1,
        buildArrows: false,
        buildNavigation: false,
        infiniteSlides: true,
        autoPlayLocked: true,
        delay: 4000,
        width:600,
        resumeDelay: 5000,


        // Callback when the plugin finished initializing
        onInitialized: function(e, slider) {
            slider.$controls
                .prepend('<ul style="left: -62px;top:112px;"><li><a class="prev" ><img src="' + leftArrow + '"/></a></li></ul>')
                .append('<ul style="left: 221px;top:112px;"><li><a class="next"><img src="' + rightArrow + '"/></a></li></ul>')
                .find('.prev, .next').click(function() {
                    if ($(this).is('.prev')) {
                        slider.goBack();
                    } else {
                        slider.goForward();
                    }
                });
        }
    });
    $('#footerSlider').anythingSlider({
        showMultiple: 1,
        changeBy: 1,
        buildArrows: false,
        buildNavigation: false,
        infiniteSlides: true,
        autoPlayLocked: true,
        delay: 4000,
        width:600,
        resumeDelay: 5000,


        // Callback when the plugin finished initializing
        onInitialized: function(e, slider) {
            slider.$controls
                .prepend('<ul style="left: -65px;"><li><a class="prev" ><img src="' + leftArrow + '"/></a></li></ul>')
                .append('<ul style="left: 703px;"><li><a class="next"><img src="' + rightArrow + '"/></a></li></ul>')
                .find('.prev, .next').click(function() {
                    if ($(this).is('.prev')) {
                        slider.goBack();
                    } else {
                        slider.goForward();
                    }
                });
        }
    });
    $('#leftSlider').anythingSlider({
        showMultiple: 1,
        changeBy: 1,
        buildArrows: false,
        buildNavigation: false,
        infiniteSlides: true,
        autoPlayLocked: true,
        delay: 4000,
        width:600,
        resumeDelay: 5000,


        // Callback when the plugin finished initializing
        onInitialized: function(e, slider) {
            slider.$controls
                .prepend('<ul style="left: -54px;top:112px;"><li><a class="prev" ><img src="' + leftArrow + '"/></a></li></ul>')
                .append('<ul style="left: 328px;top:112px;"><li><a class="next"><img src="' + rightArrow + '"/></a></li></ul>')
                .find('.prev, .next').click(function() {
                    if ($(this).is('.prev')) {
                        slider.goBack();
                    } else {
                        slider.goForward();
                    }
                });
        }
    });
    $('#topSlider').anythingSlider({
        showMultiple: 1,
        changeBy: 1,
        buildArrows: false,
        buildNavigation: false,
        infiniteSlides: true,
        autoPlayLocked: true,
        delay: 4000,
        width:600,
        resumeDelay: 5000,


        // Callback when the plugin finished initializing
        onInitialized: function(e, slider) {
            slider.$controls
                .prepend('<ul style="left: -65px;"><li><a class="prev" ><img src="' + leftArrow + '"/></a></li></ul>')
                .append('<ul style="left: 707px;"><li><a class="next"><img src="' + rightArrow + '"/></a></li></ul>')
                .find('.prev, .next').click(function() {
                    if ($(this).is('.prev')) {
                        slider.goBack();
                    } else {
                        slider.goForward();
                    }
                });
        }
    });
    $("a[rel^='prettyPhoto']").prettyPhoto();
    $('.sliderWrap').liteSlider({
        content : '.sliderContent',
        autoplay : true,        // Autoplay the slider. Values, true & false
        delay : 3,            // Transition Delay. Default 3s
        buttonsClass : 'buttons',    // Button's class
        activeClass : 'active',        // Active class
        controlBt : '.control',        // Control button selector
        playText : 'Play',        // Play text
        pauseText : 'Stop'        // Stop text
    });
    $('.sliderWrap2').liteSlider({
        content : '.sliderContent2',
        autoplay : true,        // Autoplay the slider. Values, true & false
        delay : 5,            // Transition Delay. Default 3s
        buttonsClass : 'buttons',    // Button's class
        activeClass : 'active',        // Active class
        controlBt : '.control',        // Control button selector
        playText : 'Play',        // Play text
        pauseText : 'Stop'        // Stop text
    });
})