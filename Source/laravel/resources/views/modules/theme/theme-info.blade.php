<section class="container py-4 py-lg-5">
    <div class="row">
        <div class="col-lg-8 col-xxl-9 col-hg-10">
            <article class="article-post">    
                <h2 class="fs-h2 mb-3">
                    Theme information
                </h2>
    
                <div class="row no-gutters mt-3">
                    
                    @if($theme_item["description"] != "")
                    <div class="col-md-7 mb-3">
                        {{ $theme_item["description"] }}
                    </div>
                    @endif

                    <table class="col-md-7 table">
                        <tbody>
                            <tr>
                                <td>Version</td>
                                <td>{{ $theme_item["version"] }}</td>
                            </tr>
                            <tr>
                                <td>Author</td>
                                <td>{{ $theme_item["author"] }}</td>
                            </tr>
                            <tr>
                                <td>Release Date</td>
                                <td>{{ formatDateTime($theme_item["updated_at"]) }}</td>
                            </tr>
                            <tr>
                                <td>Compatibility</td>
                                <td>{{ $theme_item["compatibility"] }}</td>
                            </tr>
                            <tr>
                                <td>Download Count</td>
                                <td>
                                    {{ number_format($theme_item["count"]) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
    
        <aside class="col-lg-4 col-xxl-3 col-hg-2 aside">
            <section class="aside-post-info">
                <h2 class="fs-h3 mb-3">Other downloads</h2>
                <p class="mb-2">
                    <a class="btn col-12" href="{{ url("/themes") }}">
                        <span class="icon-theme mr-1"></span>
                        <span>Theme Packs</span>
                    </a>
                </p>
                <p class="mb-2">
                    <a class="btn col-12" href="{{ url("languages") }}">
                        <span class="icon-language mr-1"></span>
                        <span>Language Packs</span>
                    </a>
                </p>
            </section>

            @include("modules.aside.article-list")
        </aside>
    </div>
</section>