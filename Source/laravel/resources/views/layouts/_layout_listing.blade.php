@extends("layouts._layout")
@section("_body_content")

<div class="container py-4 py-lg-5">
    <div class="row justify-content-center">
        <h2 class="col-lg-10 col-xl-9 col-xxl-8 col-hg-12 fs-h1">
            @yield("_page_title")
        </h2>
    </div>

    <div class="article-list-section">
        @yield("_article_list")
    </div>
</div>

@stop