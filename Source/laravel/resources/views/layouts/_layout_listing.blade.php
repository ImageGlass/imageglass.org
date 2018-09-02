@extends("layouts._layout")
@section("_body_content")

<div class="container py-4 py-lg-5">
    <h2 class="fs-h1">
        @yield("_page_title")
    </h2>

    <div class="article-list-section">
        @yield("_article_list")
    </div>
</div>

@stop