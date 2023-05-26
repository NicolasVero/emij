slider_slide();
// slider_fade();



function slider_slide() {

    
    $(document).ready(function() {
        const slideCount = $('.sliders li').length; 
        const animationDuration = 500; 
        
        var slideWidth = $('.sliders li').outerWidth(); 
        var slideIndex = 0; 
        
        function updateSliderPosition() {
            var leftPosition = -slideIndex * slideWidth;
            $('.sliders').animate({ 'left': leftPosition }, animationDuration);
        }
        
        $(window).on('resize', function() {
            slideWidth = $('.sliders li').outerWidth();
        });
        
        $('.prev-button').click(function() {
            
            slideIndex--;
            if (slideIndex < 0) 
            slideIndex = slideCount - 1;
            
            updateSliderPosition();
        });
        
        $('.next-button').click(function() {
            
            slideIndex++;
            if (slideIndex >= slideCount) 
            slideIndex = 0;
            
            updateSliderPosition();
        });
    });
}



function slider_fade() {
   
    $(document).ready(function() {
        const slideCount = $('.sliders li').length;
        const animationDuration = 500;
        
        var slideIndex = 0;
        
        function fadeOutCurrentSlide() {
            $('.sliders li').eq(slideIndex).hide().css('opacity', 1);
        }
        
        function fadeInNextSlide() {
            $('.sliders li').eq(slideIndex).fadeIn(animationDuration);
        }
        
        $('.prev-button').click(function() {
            fadeOutCurrentSlide();
            
            slideIndex--;
        if (slideIndex < 0)
            slideIndex = slideCount - 1;
            
            fadeInNextSlide();
        });
        
        $('.next-button').click(function() {
            fadeOutCurrentSlide();
            
            slideIndex++;
            if (slideIndex >= slideCount)
            slideIndex = 0;
            
            fadeInNextSlide();
        });
    });
}