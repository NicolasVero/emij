$(document).ready(function() {
    const slideWidth = $('.sliders li').outerWidth(); 
    const slideCount = $('.sliders li').length; 
    const animationDuration = 500; 
    
    var slideIndex = 0; 

    function updateSliderPosition() {
        var leftPosition = -slideIndex * slideWidth;
        $('.sliders').animate({ 'left': leftPosition }, animationDuration);
    }

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