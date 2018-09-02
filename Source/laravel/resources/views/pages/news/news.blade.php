@extends("layouts._layout_listing")
@section("_page_title")
    All News
@stop



@section("_article_list")
    <ul class="row article-list">

        @php
            // get list of items
            $news_items = $news_collection["data"];
        @endphp

        @foreach ($news_items as $item)
        @php
            $url = url("news", $item["slug"]."-".$item["id"]);
            $title = $item["title"];
            $updated_at = formatDateTime($item["updated_at"]);
            $img = "https://picsum.photos/600/600/?random&id={$item["id"]}";
            $desc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non nibh quis massa tempus scelerisque id eu felis. Integer ultrices facilisis magna. Nulla suscipit ut tellus in lacinia.";
            $totalDays = getTotalDays($item["updated_at"]);
        @endphp

        <li class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6 article-item {{ $totalDays < 8 ? "new-article" : "" }}">
            <article class="row no-gutters">
                <a class="col-md-3 article-image" href="{{ $url }}" title="{{ $title }}">
                    <img src="{{ $img }}" alt="{{ $title }}">
                </a>
                <div class="col-md-9 p-3 article-content">
                    <h3 class="article-title fs-h3">
                        <a class="will-link" href="{{ $url }}" title="{{ $title }}">
                            {{ $title }}
                        </a>
                    </h3>
                    <p>
                        {{ $desc }}
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
            </article>
        </li>
        @endforeach
    </ul>

    <div class="row">
        <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-12">
            {{ $news_collection->links() }}
        </div>
    </div>
@stop