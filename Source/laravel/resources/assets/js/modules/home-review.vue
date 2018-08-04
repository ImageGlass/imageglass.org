<template>
	<section class="home-review">
		<div class="container">
			<div class="row slider-review" id="sliderReview">
				<div class="slick-slider">
					<div class="review-item">
						<blockquote class="quote-item" cite="urlxxxxxx">
							<p>
								Nunc vel neque et enim fermentum pulvinar sit amet in justo. In et tellus et lacus placerat gravida. Nam aliquet risus ac aliquet sagittis. Sed eu imperdiet arcu, eget aliquam enim.
							</p>
							<footer class="blockquote-footer"><span class="author">SomeoneFamous</span> in <cite title="SourceTitle">SourceTitle</cite></footer>
						</blockquote>
					</div>
					<div class="review-item">
						<blockquote class="quote-item" cite="urlxxxxxx">
							<p>
								Morbi erat mauris, semper sit amet dictum vitae, auctor quis urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</p>
							<footer class="blockquote-footer"><span class="author">SomeoneFamous</span> in <cite title="SourceTitle">SourceTitle</cite></footer>
						</blockquote>
					</div>
					<div class="review-item">
						<blockquote class="quote-item" cite="urlxxxxxx">
							<p>
								Nam laoreet at augue nec vestibulum.
							</p>
							<footer class="blockquote-footer"><span class="author">SomeoneFamous</span> in <cite title="SourceTitle">SourceTitle</cite></footer>
						</blockquote>
					</div>
					<div class="review-item">
						<blockquote class="quote-item" cite="urlxxxxxx">
							<p>
								Maecenas eu augue posuere eros dictum condimentum ac consectetur felis.
							</p>
							<footer class="blockquote-footer"><span class="author">SomeoneFamous</span> in <cite title="SourceTitle">SourceTitle</cite></footer>
						</blockquote>
					</div>
					<div class="review-item">
						<blockquote class="quote-item" cite="urlxxxxxx">
							<p>
								Ut maximus dui quam, ut sollicitudin lacus tincidunt vel. Mauris pulvinar leo non suscipit laoreet. Quisque luctus lacus nibh, sed rutrum sem aliquet ut. Fusce id nisi vel sapien aliquet efficitur eu quis leo.
							</p>
							<footer class="blockquote-footer"><span class="author">SomeoneFamous</span> in <cite title="SourceTitle">SourceTitle</cite></footer>
						</blockquote>
					</div>
					<div class="review-item">
						<blockquote class="quote-item" cite="urlxxxxxx">
							<p>
								Quisque cursus non dui vitae vulputate.
							</p>
							<footer class="blockquote-footer"><span class="author">SomeoneFamous</span> in <cite title="SourceTitle">SourceTitle</cite></footer>
						</blockquote>
					</div>
					<div class="review-item">
						<blockquote class="quote-item" cite="urlxxxxxx">
							<p>
								Nulla volutpat commodo turpis, nec eleifend urna. Phasellus auctor lobortis elit, nec iaculis libero interdum vitae. Maecenas nec magna tellus.
							</p>
							<footer class="blockquote-footer"><span class="author">SomeoneFamous</span> in <cite title="SourceTitle">SourceTitle</cite></footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>


<script>
import $ from "jquery";
import "slick-carousel";

function initiate() {
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
	});
}

export default {
	name: "HomeReviewModule",
	mounted: function() {
		initiate();
	}
};
</script>

<style lang="scss" scoped>
</style>
