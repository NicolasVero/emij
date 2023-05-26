slider_slide();
// slider_fade();












function slider_slide() {

    
    $(document).ready(function() {

        const slideCount = $('.sliders li').length; 
        const animationContentDuration = 800; 
        const animationBackgroundDuration = 600; 
         
        var slideWidth = $('.sliders li').outerWidth(); 
        var slideIndex = 0; 
        
        // $('.sliders-background').css('background', 'dddddd').fadeIn('slow');

        function update_slider_position() {
            var leftPosition = -slideIndex * slideWidth - 4 * slideIndex;
            $('.sliders').animate({ 'left': leftPosition }, animationContentDuration);
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
                $(this).removeClass().addClass('sliders-background ' + degrades[slideIndex]);
                $(this).fadeIn(animationBackgroundDuration);
            });

        }

        
        $(window).on('resize', function() {
            slideWidth = $('.sliders li').outerWidth();
        });
        



        $('.prev-button').click(function() {
            
            decremente_slider();
            update_slider_position();
            change_color();
        });
        
        $('.next-button').click(function() {
            
            incremente_slider();
            update_slider_position();
            change_color();
        });
    });
}






















function slider_fade() {
   
    $(document).ready(function() {
        const slideCount = $('.sliders li').length;
        const animationDuration = 500;
        
        var slideIndex = 0;
        
        function fadeOutCurrentSlide(old) {
            $('.sliders li').eq(old).hide().css('opacity', 1);
        }
        
        function fadeInNextSlide() {
            $('.sliders li').eq(slideIndex).fadeIn(animationDuration);
        }
        
        $('.prev-button').click(function() {
            
            old = slideIndex;

            slideIndex--;
            if (slideIndex < 0)
            slideIndex = slideCount - 1;
            
            fadeInNextSlide();
            fadeOutCurrentSlide(old);
            
        });
        
        $('.next-button').click(function() {
            
            old = slideIndex;

            slideIndex++;
            if (slideIndex >= slideCount)
            slideIndex = 0;
            
            fadeInNextSlide();
            fadeOutCurrentSlide(old);
        });
    });
}