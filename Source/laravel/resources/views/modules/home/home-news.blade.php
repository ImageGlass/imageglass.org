<section class="home-news">
    <div class="container">
        <h2 class="fs-h2 text-center">
            Latest News
        </h2>

        <div class="text-center mt-4">
            
            <div class="row justify-content-center home-news-list">
                <div class="col-xl-8 col-xxl-10 col-hg-9">
                    <ul class="news-list">

                        @foreach ($news_items as $item)
                            @php
                            $url = url("news", $item["slug"]."-".$item["id"]);
                            $totalDays = getTotalDays($item["updated_at"]);
                            @endphp

                            <li class="news-item {{ $totalDays < 8 ? "new-post" : "" }}">
                                <a href="{{ $url }}" class="news-item-content">
                                    <h3 class="title">{{ $item["title"] }}</h3>
                                    <time datetime="{{ $item["updated_at"] }}">{{ formatDateTime($item["updated_at"]) }}</time>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>