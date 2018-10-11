@extends("layouts._layout_listing")
@section("_page_title")
    ImageGlass Moon 🌙
@stop

@section("_page_subtitle")
    ImageGlass Moon has the latest of the new ImageGlass features.<br/>
    It is usually built and shipped to users with the latest state of <a href="https://github.com/d2phap/ImageGlass/commits/develop" target="_blank" rel="noopener noreferrer"><code>develop</code> branch</a>.<br/>

    <span class="d-inline-block mt-2">
        Be forewarned: it's designed for early adopters, and can contain bugs.
    </span>

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
        @foreach ($moon_files as $file)
        @php
            $filename = basename($file);
            $size = formatBytes(filesize($file));
            $lastModified = formatDateTime(filemtime($file), "", true, true);
        @endphp

        <li class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6 article-item">
            <article class="eff-reveal-border">
                <div class="row no-gutters article-item-content eff-reveal">
                    <div class="col-12 p-3 article-content">
                        <h3 class="article-title fs-h3">
                            <a class="will-link" href="{{ url($file) }}" title="{{ $filename }}">
                                {{ $filename }}
                            </a>
                        </h3>
                        <p class="mb-0 fs-small">
                            Size: {{ $size }}<br/>
                            Release date:
                            <time datetime="xxxxx">
                                {{ $lastModified }}
                            </time>
                        </p>
                    </div>
                </div>
            </article>
        </li>
        @endforeach
    </ul>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6">
            @include("shared._donation")
        </div>
    </div>
@stop