<section class="section-screenshots" id="screenshots">
    <div class="container">
        <h2 class="fs-h2">
            Screenshots
        </h2>

        <section class="mt-4">
            @php
                $_gallery = $release_item["screen_shots"];
                $_gallery_category = "release";
            @endphp
            @include("shared._body_photo-gallery")
        </section>
    </div>
</section>

