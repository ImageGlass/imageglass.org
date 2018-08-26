<section class="home-review">
    <div class="separator"></div>

    <div class="container mt-5">
        <h2 class="fs-h2 text-center">
            Reviews
        </h2>

        <div class="row slider-review mt-4" id="sliderReview">
            <div class="slick-slider">
                @foreach ($review_items as $review_item)
                    <div class="review-item">
                        <blockquote class="quote-item">
                            <p>
                                {{ $review_item["content"] }}
                            </p>
                            <footer class="blockquote-footer"><span class="author">{{ $review_item["author"] }}</span></footer>
                        </blockquote>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>