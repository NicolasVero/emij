






// // //SLIDER HOME
// if( $('#slider-home').length ){
	
// 	// var colorOverlaye = $('.album-article').data('color');
// 	// var overImage = document.querySelector(':root');
// 	// overImage.style.setProperty('--overlaye-color', colorOverlaye);
	
// 	$('.slider-home').slick({
// 				infinite: true,
// 				speed: 1000,
// 				slidesToShow: 1,
// 				arrows: true,
// 				dots: false,
// 				prevArrow:'<button type="button" class="slick-prev d-flex justify-content-center align-items-center"><i class="ti-arrow-left"></i></button>',
// 				nextArrow:'<button type="button" class="slick-next d-flex justify-content-center align-items-center"><i class="ti-arrow-right"></i></button>',
// 				autoplay: true,
// 				autoplaySpeed: 4000,
// 				fade: true,
// 				slidesToScroll: 1,
// 				appendArrows: $('#slick-navigation-desktop'),
// 				lazyLoad:'progressive',
// 				zIndex: 1,
// 				responsive: [
// 					{
// 						breakpoint: 992,
// 						settings:{
// 							appendArrows: $('#slick-navigation-smartphone'),
// 							autoplay: false,
// 							autoplaySpeed: 4000,
// 						}
// 					}
					
// 				]
// 	});
// //BOUTON ÉCOUTE EXTRAIT
// 	if( $( window ).width() > 576 ){
// 		let play = document.querySelector('.button-heard-demo');
// 		let overlayeOn = document.querySelector('.overlay-head-image');
// 		$('.button-heard-demo').click(function() {
// 				$('.container-heard-album-home').toggleClass('on');
// 				$('.cto-slide').toggleClass('on');
// 				$('.link-to-page-band').toggleClass('off');
// 				$('.title-and-excerpt-slider').toggleClass('off');
// 				// $('.overlay-head-image').toggleClass('on');
// 				// if (play.querySelector("i").className == "ti-control-play"){
// 				// 	play.querySelector("i").className = "ti-close";
// 				// } else {
// 				// 	play.querySelector("i").className = "ti-control-play";
// 				// }
// 			}   
// 		);
// 	} else {
// 		let play = document.querySelector('.button-heard-demo');
// 		let overlayeOn = document.querySelector('.overlay-head-image');
// 		$('.button-heard-demo').click(function() {
// 				$(this).toggleClass('on');
// 				$('.container-heard-album-home').toggleClass('on');	
// 				$('.overlay-head-image').toggleClass('on');
// 				$('.title-and-excerpt-slider').toggleClass('off');
// 				// if (play.querySelector("i").className == "ti-control-play"){
// 				// 	play.querySelector("i").className = "ti-close";
// 				// } else {
// 				// 	play.querySelector("i").className = "ti-control-play";
// 				// }
// 			}   
// 		);
// 	}
// }