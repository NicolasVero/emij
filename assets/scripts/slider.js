slider_slide();

function slider_slide() {

    
    $(document).ready(function() {

        // CONSTANTES 
        const slideCount = $('.sliders li').length; 
        const animationContentDuration = 800; 
        const animationImageDuration = 600; 
        const animationBackgroundDuration = 600; 
        const sliderMargin = 4;
         
        // VARIABLES 
        var slideWidth = $('.sliders li').outerWidth(); 
        var slideIndex = 0; 
        var is_blocked = false;
        var visibilityChangePaused = false;
        

        // FONCTIONS
        function update_slider_position() {
            var leftPosition = -slideIndex * slideWidth - sliderMargin * slideIndex;
            $('.sliders .container > div').animate({ 'left': leftPosition }, animationContentDuration);
            $('.sliders .container figure').animate({ 'left': leftPosition }, animationImageDuration);
        }

        function incremente_slider() {
            slideIndex++;
            if (slideIndex >= slideCount) 
                slideIndex = 0;
        }

        function decremente_slider() {
            slideIndex--;
            if (slideIndex < 0) 
                slideIndex = slideCount - 1;
        }

        function change_color() {

            const degrades = [
                "degrade-1",
                "degrade-2",
                "degrade-3"
            ];

            $('.sliders-background').fadeOut(animationBackgroundDuration, function() {
                $(this).removeClass().addClass('sliders-background ' + degrades[slideIndex % degrades.length]);
                $(this).fadeIn(animationBackgroundDuration);
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
            
            decremente_slider();
            update_slider_position();
            change_color();
            slider_blocked();
        });
    
        
        $('.next-button').click(function() {
            
            incremente_slider();
            update_slider_position();
            change_color();
            slider_blocked();
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
