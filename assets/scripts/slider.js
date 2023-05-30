slider_slide();

function slider_slide() {

    $(document).ready(function() {

        // CONSTANTES 
        const slideCount = $('.sliders li').length; 
        const animationContentDuration = 800; 
        const animationImageDuration = 600; 
        const animationFadeInDuration = 600; 
        const animationFadeOutDuration = 200; 
        const sliderMargin = 4;
        const degrades = [
            "degrade-1",
            "degrade-2",
            "degrade-3"
        ];
        
        // VARIABLES 
        var slideWidth = $('.sliders li').outerWidth(); 
        var slideIndex = 0; 
        var is_blocked = false;
        var visibilityChangePaused = false;
        var buttons_disabled = false;
        

        // FONCTIONS

        function update_slider() {
            update_slider_position();
            change_color();
            slider_blocked();
        }

        function update_slider_position() {
            var leftPosition = -slideIndex * slideWidth - sliderMargin * slideIndex;
            $('.sliders .container > div').animate({ 'left': leftPosition }, animationContentDuration);
            $('.sliders .container figure').animate({ 'left': leftPosition }, animationImageDuration);
        }

        function incremente_slider() {
            slideIndex++;
            if (slideIndex >= slideCount) 
                slideIndex = 0;

            disabled_buttons();
        }

        function decremente_slider() {
            slideIndex--;
            if (slideIndex < 0) 
                slideIndex = slideCount - 1;

            disabled_buttons();
        }

        function disabled_buttons() {
            buttons_disabled = true;

            setTimeout( function() {
                buttons_disabled = false;
            }, animationContentDuration);
        }

        function change_color() {

            $('.sliders-background').fadeOut(animationFadeOutDuration, function() {
                $(this).removeClass().addClass('sliders-background ' + degrades[slideIndex % degrades.length]);
                $(this).fadeIn(animationFadeInDuration);
            });
        }

        function slider_blocked() {

            is_blocked = true;

            setTimeout( function() {
                is_blocked = false;
            }, 8000);
        }

        function pause_animation() {
            if (!visibilityChangePaused && !is_blocked) {
                $('.sliders .container > div, .sliders .container figure').stop(true, true); 
                visibilityChangePaused = true;
            }
        }
    
        function resume_animation() {
            if (visibilityChangePaused && !is_blocked) {
                update_slider_position(); 
                visibilityChangePaused = false;
            }
        }    

        // ECOUTEURS D'EVENEMENTS
        document.addEventListener("visibilitychange", function() {
            if (document.visibilityState === 'hidden') {
                pause_animation();
            } else {
                resume_animation();
            }
        });


        $(window).on('resize', function() {
            slideWidth = $('.sliders li').outerWidth();
        });
        

        $('.prev-button').click(function() {
            
            if(!buttons_disabled) {
                decremente_slider();
                update_slider();
            }
        });
    
        
        $('.next-button').click(function() {
            
            if(!buttons_disabled) {
                incremente_slider();
                update_slider();
            }
        });


        setInterval( function() {
            if(!is_blocked) {
                incremente_slider();
                update_slider_position();
                change_color();
            }
        }, 5000);

    });
}
