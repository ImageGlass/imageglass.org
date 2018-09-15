@extends("layouts._layout_listing")
@section("_page_title")
    Documentation
@stop


@section("_article_list")
    <ul class="row justify-content-center article-list">
        <li class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6 article-item">
            <article class="eff-reveal-border">
                <div class="row no-gutters article-item-content eff-reveal">
                    <a class="col-md-3 article-image article-icon" href="{{ url("docs/features") }}" title="Features">
                        <img src="{{ url("img/stars.svg") }}" alt="Features">
                    </a>
                    <div class="col-md-9 p-3 article-content">
                        <h3 class="article-title fs-h3">
                            <a class="will-link" href="{{ url("docs/features") }}" title="Features">
                                Features
                            </a>
                        </h3>
                        <p>
                            ImageGlass is another open source basic image viewer, which, while simple, benefits from the speed that comes with being so lightweight, and is a good choice for Windows users.
                        </p>
                    </div>
                </div>
            </article>
        </li>
        {{--  #Features  --}}

        <li class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6 article-item">
            <article class="eff-reveal-border">
                <div class="row no-gutters article-item-content eff-reveal">
                    <a class="col-md-3 article-image article-icon" href="{{ url("docs/supported-formats") }}" title="Supported formats">
                        <img src="{{ url("img/photo.svg") }}" alt="Supported formats">
                    </a>
                    <div class="col-md-9 p-3 article-content">
                        <h3 class="article-title fs-h3">
                            <a class="will-link" href="{{ url("docs/supported-formats") }}" title="Supported formats">
                                Supported formats
                            </a>
                        </h3>
                        <p>
                            ImageGlass supports the most common image formats, including GIF, PNG, WEBP, SVG, RAW,... You also can customize this extension list easily.
                        </p>
                    </div>
                </div>
            </article>
        </li>
        {{--  #Supported formats  --}}

        <li class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6 article-item">
            <article class="eff-reveal-border">
                <div class="row no-gutters article-item-content eff-reveal">
                    <a class="col-md-3 article-image article-icon" href="{{ url("docs/ui-shortcuts-reference") }}" title="UI Shortcuts Reference">
                        <img src="{{ url("img/keyboard.svg") }}" alt="UI Shortcuts Reference">
                    </a>
                    <div class="col-md-9 p-3 article-content">
                        <h3 class="article-title fs-h3">
                            <a class="will-link" href="{{ url("docs/ui-shortcuts-reference") }}" title="UI Shortcuts Reference">
                                UI Shortcuts Reference
                            </a>
                        </h3>
                        <p>
                            ImageGlass has several built-in shortcut keys that can save you time in your daily workflows. This guide provides a quick reference to each shortcut available in ImageGlass.
                        </p>
                    </div>
                </div>
            </article>
        </li>
        {{--  #UI Shortcuts Reference  --}}

    </ul>

@stop