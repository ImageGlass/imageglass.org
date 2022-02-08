<style>
.download-file-item.Spider .btn:not(.eff-reveal-border).btn-primary {
    background-image: linear-gradient(135deg,rgb(114 173 60 / 80%),rgba(41,152,172,.8),rgba(60,88,173,.8));
}
.download-file-item .table tr td {
    padding: 0;
    font-size: 85%;
}
.download-file-item .note {
    font-size: 85%;
    font-style: italic;
}
</style>

<section class="container py-4 py-lg-5">
    <div class="row">
        <div class="col-lg-8 col-xxl-9 col-hg-10">
            <article class="article-post">    
                <h2 class="fs-h2 mb-3">
                    Release information
                </h2>
    
                <div class="row no-gutters mt-3">
                    <table class="col-md-7 table">
                        <tbody>
                            <tr>
                                <td>Version</td>
                                <td>{{ $release_item["version"] }}</td>
                            </tr>
                            <tr>
                                <td>Release Date</td>
                                <td>{{ formatDateTime($release_item["updated_at"]) }}</td>
                            </tr>
                            <tr>
                                <td>Download Count</td>
                                <td>
                                    @php
                                        $download_count = 0;
                                    @endphp
    
                                    @foreach ($release_item["downloads"] as $item)
                                        @php
                                            $download_count += $item["count"];
                                        @endphp
                                    @endforeach
    
                                    {{ number_format($download_count) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article class="article-post mb-0" id="downloads">
                <h2 class="fs-h2 mb-3">
                    Downloads
                </h2>

                <div class="box box-info mt-3 links">
                    ❔ Looking for beta version? Download <a href="{{ url("moon") }}" title="Take me there!">ImageGlass Moon</a>!
                </div>
    
                @if (isset($release_latest) && $release_latest["version"] != $release_item["version"])
                <div class="box box-warning mt-3 links">
                    ⚠ There is a newer version of ImageGlass. Would you like to <a href="{{ url("download") }}" title="Take me there!">download</a>?
                </div>
                @endif
                
                <div class="download-files mt-3 col-12">
                    <!-- MS Store download -->
                    <div class="row download-file-item py-2 mb-2 type-store" style="max-height: 122px;">
                        <div class="col-3 col-md-2 col-lg-2 col-xl-2 col-xxl-auto">
                            <div class="file-type-icon" style="font-size: 50px; padding: 0; line-height: 0;">
                                🛍
                            </div>
                        </div>

                        <div class="col-9 col-md-10 col-lg-10 col-xl-10 col-xxl-auto">
                            <p>
                                Support this project by purchasing from
                                <a href="https://www.microsoft.com/store/productId/9N33VZK3C7TH">Microsoft Store</a>.
                            </p>
                            <script type="module" src="https://getbadgecdn.azureedge.net/ms-store-badge.bundled.js"></script>
                            <ms-store-badge productid="9n33vzk3c7th" size="large" style="transform: scale(0.6) translate(-185px, -40px);"></ms-store-badge>
                        </div>
                    </div>

                @php
                $download_index = 0;
                $downloads_arr = $release_item["downloads"];

                if ((bool)random_int(0, 1)) {
                    usort($downloads_arr, function($a, $b) {
                        if ($a["id"] === $b["id"]) return 0;
                        if ($a["id"] > $b["id"]) return 1;
                        return -1;
                    });
                }
                @endphp

                @foreach ($downloads_arr as $item)
                    @php
                    $download_url = URL::to("release/download/{$release_item["slug"]}-{$downloads_arr[$download_index]["id"]}");
                    @endphp

                    <div class="row download-file-item py-2 mb-2 {{ $item["type"] }}">
                        <div class="col-3 col-md-2 col-lg-2 col-xl-2 col-xxl-auto">
                            <div class="file-type-icon">
                                *.{{ $item["file_type"] }}
                            </div>
                        </div>

                        <div class="col-9 col-md-10 col-lg-10 col-xl-10 col-xxl-auto">
                            <div>
                                <a class="btn btn-primary" href="{{ $download_url }}" title="Download {{ $item["type"] }} version" target="_blank">
                                    <span class="icon-download"></span>
                                    <span class="mr-1">{{ $item["type"] }}</span>
                                    <small class="d-inline-block">({{ $item["size"] }})</small>
                                </a>
                                @if (str_contains($item["type"], "Spider"))
                                <a class="d-inline-block ml-2" href="{{ URL::to("spider") }}">
                                    ℹ Learn more
                                </a>
                                @endif
                            </div>

                            @if (str_contains($item["type"], "Spider"))
                            <div class="note mt-1 mb-2">
                                By downloading, installing and using ImageGlass Spider, you agree and accept our
                                <a href="https://github.com/ImageGlass/Spider/blob/develop/PRIVACY.md" target="_blank" rel="noopener noreferrer">privacy policy</a>.
                            </div>
                            @endif

                            <table class="table table-borderless mt-1">
                                <tbody>
                                    <tr>
                                        <td class="pr-3 align-middle" width="140">SHA1 Checksum</td>
                                        <td class="text-code">{{ $item["checksum"] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-3 align-middle">Download Count</td>
                                        <td>
                                            {{ number_format($item["count"]) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    @php
                    $download_index++;
                    @endphp
                @endforeach
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
                <p class="mb-0">
                    <a class="btn col-12" href="https://github.com/d2phap/ImageGlass/issues" target="_blank" rel="noopener noreferrer">
                        <span class="icon-bug mr-1"></span>
                        <span>Report an issue</span>
                    </a>
                </p>
            </section>

            @include("modules.aside.article-list")
        </aside>
    </div>
</section>