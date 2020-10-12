@extends("layouts._layout_listing")
@section("_page_title")
    All Theme Packs
@stop

@section("_page_subtitle")
    Beautiful theme packs to change the user interface of ImageGlass. Learn how to create a theme pack at: 
    <a href="https://github.com/ImageGlass/theme" target="_blank" rel="noopener noreferrer">https://github.com/ImageGlass/theme</a>.

    <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-12 mb-0 mt-4">
        <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 col-hg-3 mb-0">
                @include("shared._ads")
            </div>
        </div>
    </div>
@stop


@section("_article_list")
    <ul class="row justify-content-center article-list">

        @php
            // get list of items
            $theme_items = $theme_collection["data"];
        @endphp

        @foreach ($theme_items as $item)
        @php
            $url = url("theme", $item["slug"]."-".$item["id"]);
            $title = $item["title"];
            $version = $item["version"];
            $compatibility = $item["compatibility"];
            $author = $item["author"];
            $updated_at = formatDateTime($item["updated_at"]);
            $img = getFileUrl($item["image"], "theme");
            $desc = $item["description"];
            $totalDays = getTotalDays($item["updated_at"]);
        @endphp

        <li class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6 article-item {{ $totalDays < 8 ? "new-article" : "" }}">
            <article class="eff-reveal-border">
                <div class="row no-gutters article-item-content eff-reveal">
                    <a class="col-md-3 article-image" href="{{ $url }}" title="{{ $title }}">
                        <img src="{{ $img }}" alt="{{ $title }}">
                    </a>
                    <div class="col-md-9 p-3 article-content">
                        <h3 class="article-title fs-h3">
                            <a class="will-link" href="{{ $url }}" title="{{ $title }}">
                                {{ $title }}
                            </a>
                        </h3>
                        <p class="mb-2">
                            {{ $desc }}
                        </p>
                        <p class="mb-2 fs-small">
                            Version: {{ $version }}<br/>
                            Compatibility: {{ $compatibility }}<br/>
                            Author: {{ $author }}
                        </p>
                        <footer>
                            <p class="fs-small">
                                <i> Posted on 
                                    <time datetime="{{ $item["updated_at"] }}">
                                        {{ $updated_at }}
                                    </time>
                                </i>
                            </p>
                        </footer>
                    </div>
                </div>
            </article>
        </li>
        @endforeach
    </ul>

    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-12">
            {{ $theme_collection->links() }}
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6">
            @include("shared._donation")
        </div>
    </div>
@stop