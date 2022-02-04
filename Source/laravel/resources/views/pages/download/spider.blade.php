@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">
    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            ImageGlass Spider
            <img src="https://imageglass.org/img/spider.svg" alt="Spider" height="32">
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post">
            <p>
                ImageGlass Spider is a special release of ImageGlass, collaborates with the <a href="https://www.spider.com" target="_blank" rel="noopener noreferrer">Spider</a> to create a full-featured image viewer and provide enterprises the on-demand data collection for analysis.
            </p>
            <p>
                ImageGlass Spider is also a free and <a href="https://github.com/ImageGlass/Spider" target="_blank" rel="noopener noreferrer">open source</a> image viewer similar to <a href="https://github.com/d2phap/ImageGlass" target="_blank" rel="noopener noreferrer">ImageGlass Kobe</a>. It gives you the possibility to view over 80+ common image formats, including .gif, .svg, .png, .heic, ... and many more advanced features which help normal users or designers speed up their work.
            </p>

            <h3 class="fs-h3 mt-5">
                Release information
            </h3>

            <div class="row no-gutters my-3">
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
                    </tbody>
                </table>
            </div>


            <h3 class="fs-h3 mt-5">
                Downloads
            </h3>

            <p class="row no-gutters box box-info mt-3">
                <span class="col-1 fs-h3">ℹ</span>
                <span class="col">
                    By downloading, installing and using ImageGlass Spider, you agree and accept our <a href="https://github.com/ImageGlass/Spider/blob/develop/PRIVACY.md" target="_blank" rel="noopener noreferrer">privacy policy</a>.
                </span>
            </p>

            <div class="download-files mt-3 col-12">
                @php
                $download_index = 0;
                @endphp

                @foreach ($release_item["downloads"] as $item)
                    @if ($item["type"] === "spider x64")
                        @php
                        $download_url = URL::to("release/download/{$release_item["slug"]}-{$release_item["downloads"][$download_index]["id"]}");
                        @endphp

                        <div class="row download-file-item {{ $item["type"] }}">
                            <div class="col-3 col-md-2 col-lg-2 col-xl-2 col-xxl-auto">
                                <div class="file-type-icon">
                                    *.{{ $item["file_type"] }}
                                </div>
                            </div>

                            <div class="col-9 col-md-10 col-lg-10 col-xl-10 col-xxl-auto">
                                <a class="btn btn-primary" href="{{ $download_url }}" title="Download {{ $item["type"] }} version" target="_blank">
                                    <span class="icon-download"></span>
                                    <span class="mr-1">{{ $item["type"] }}</span>
                                    <small class="d-inline-block">({{ $item["size"] }})</small>
                                </a>

                                <table class="table table-borderless mt-2">
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
                    @endif

                    @php
                    $download_index++;
                    @endphp
                @endforeach
            </div>

        </article>

        <aside class="col-md-4 col-lg-4 col-xxl-3 col-hg-2 px-0 px-md-3 aside">
            @include("shared._ads")
            @include("modules.aside.article-list")
        </aside>
    </div>

    <div class="row mt-5">
        <div class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4">
            @include("shared._donation")
        </div>
    </div>
</section>

@stop