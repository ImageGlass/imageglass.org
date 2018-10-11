@extends("layouts._layout_listing")
@section("_page_title")
    All Releases
@stop

@section("_page_subtitle")
    Archive of all ImageGlass stable versions.<br/>
    Looking for beta version? Download <a class="link" href="{{ url("/moon") }}">ImageGlass Moon</a>!
@stop


@section("_article_list")
    <ul class="row justify-content-center article-list">

        @php
            // get list of items
            $release_items = $release_collection["data"];
        @endphp

        @foreach ($release_items as $item)
        @php
            $url = url("release", $item["slug"]."-".$item["id"]);
            $title = $item["title"];
            $version = $item["version"];
            $updated_at = formatDateTime($item["updated_at"]);
            $img = getFileUrl($item["image"], "release");
            $totalDays = getTotalDays($item["updated_at"]);

            if (empty($img)) {
                $img = "https://picsum.photos/500/300/?random&id={$item["id"]}";
            }
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
                        <p class="mb-0 fs-small">
                            Version: {{ $version }}<br/>
                            Release date:
                            <time datetime="{{ $item["updated_at"] }}">
                                {{ $updated_at }}
                            </time>
                        </p>
                    </div>
                </div>
            </article>
        </li>
        @endforeach
    </ul>

    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-12">
            {{ $release_collection->links() }}
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6">
            @include("shared._donation")
        </div>
    </div>
@stop