@extends("layouts._layout")
@section("_body_content")

@include("modules.theme.theme-highlight")
@include("modules.theme.theme-info")

<section class="section-screenshots" id="screenshots">
    <div class="container">
        <h2 class="fs-h2">
            Screenshots
        </h2>

        <section class="mt-4">
            @php
                $_gallery = $theme_item["screen_shots"];
                $_gallery_category = "theme";
            @endphp
            @include("shared._body_photo-gallery")
        </section>
    </div>
</section>

<section class="container py-4 py-lg-5">
    <div class="row">
        <div class="col-lg-8 col-xxl-9 col-hg-10">
            <article class="article-post">    
                @include("shared._donation")
            </article>
        </div>
    
        <aside class="col-lg-4 col-xxl-3 col-hg-2 aside">
        </aside>
    </div>
</section>

@stop