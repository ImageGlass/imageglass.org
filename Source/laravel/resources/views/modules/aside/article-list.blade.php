<section class="aside-article-list">
    <h4 class="fs-h3">{{ @$_article_list_title }}</h4>
    <ul>
        @php
        // get list of items
        $_article_items = $_article_collection["data"];
        @endphp

        @foreach ($_article_items as $item)
        @php
            $article_url = url($_category_url, $item["slug"]."-".$item["id"]);
            $article_title = $item["title"];
            $article_updated_at = formatDateTime($item["updated_at"]);
            $article_total_days = getTotalDays($item["updated_at"]);
        @endphp
        <li class="eff-reveal-border {{ $article_total_days < 8 ? "new-article" : "" }}">
            <a class="eff-reveal" href="{{ $article_url }}">
                {{ $article_title }}

                <time class="fs-tiny d-block" datetime="{{ $item["updated_at"] }}">
                    {{ $article_updated_at }}
                </time>
            </a>
        </li>
        @endforeach
    </ul>
</section>