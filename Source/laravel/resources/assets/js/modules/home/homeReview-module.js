
import $ from "jquery"
import "slick-carousel"


function initiateSlickSlider() {
	$("#sliderReview > .slick-slider").slick({
		dots: false,
		arrows: false,
		focusOnSelect: true,
		pauseOnHover: false,
		lazyLoad: "ondemand",
		swipeToSlide: true,
		centerMode: true,
		centerPadding: '0px',
		autoplay: true,
		autoplaySpeed: 3000,
		infinite: true,
		speed: 500,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 2561,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 1441,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 577,
				settings: {
					slidesToShow: 1,
					fade: true
				}
			}
		]
	})
}


export default class HomeReviewModule {

    static initModule() {
        initiateSlickSlider()
    }

}
