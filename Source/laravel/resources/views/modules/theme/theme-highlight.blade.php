<section class="bg-box theme-highlight" style="background-image: url({{ getRandomImg() }});">
    <div class="bg-box-content">
        <div class="container py-5">

            <h1 class="fs-h1 text-center slogan">
                {{ $theme_item["title"] }}
            </h1>

            <div class="text-center mt-4">
                <a href="{{ url("theme/download/{$theme_item["slug"]}-{$theme_item["id"]}") }}" class="btn btn-download eff-reveal-border" target="_blank">
                    <span class="eff-reveal">
                        <i class="icon icon-download"></i>
                        DOWNLOAD
                    </span>
                </a>
            </div>

            <div class="text-center mt-3">
                <a class="sub-link" href="{{ url('/themes') }}" title="Download Theme Packs">
                    <span class="icon-theme mr-1"></span>
                    Themes
                </a>
                <a class="sub-link" href="{{ url('/languages') }}" title="Download Language Packs">
                    <span class="icon-language mr-1"></span>
                    Languages
                </a>
            </div>

            <div class="row justify-content-center mt-4 pt-2">
                <div class="col-lg-4">
                    @include("shared._ads")
                </div>
            </div>
        </div>
    </div>
</section>