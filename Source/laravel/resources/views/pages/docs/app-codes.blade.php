@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">
    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            The differences between ImageGlass release codes
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post links">
            <p><i>Since version 8.5, ImageGlass has 3 code names. In this article, you will learn what the differences of ImageGlass Kobe, Moon, and Spider release are.</i></p>

            <h3 class="fs-h3 mb-3">
                ImageGlass Kobe 🦛
            </h3>
            <p>
                ImageGlass Kobe is the stable release of the original ImageGlass. It's free, open-source, and clean software. You can find the source code at <a href="https://github.com/d2phap/ImageGlass" target="_blank">github.com/d2phap/ImageGlass</a>.
            </p>
            <p>
                ImageGlass Kobe is also published to <a href="https://www.microsoft.com/store/productId/9N33VZK3C7TH" target="_blank">Microsoft Store as a paid app</a>. You will need to pay a small amount after 7-day trial. If you buy it, you'll be supporting its development directly. You will get the convenience of fast, easy installation onto all of your Windows devices along with fully automatic, behind-the-scenes updates with all the newest features, improvements, and fixes.
            </p>
            <br/><br/>
            
            
            <h3 class="fs-h3 mb-3">
                ImageGlass Moon 🌙
            </h3>
            <p>
                ImageGlass Moon is the bleeding-edge (or beta) release of IG Kobe, it has the latest features (and also bugs) of the next version of ImageGlass Kobe. It is usually built and shipped to users with the latest state of <a href="https://github.com/d2phap/ImageGlass/tree/develop" target="_blank">develop branch</a>.
            </p>
            <p>
                You can download it at <a href="https://imageglass.org/moon">imageglass.org/moon</a>.
            </p>
            <br/><br/>
            
            
            <h3 class="fs-h3 mb-3">
                ImageGlass Spider 🕷
            </h3>
            <p>
                ImageGlass Spider has the same features of the ImageGlass Kobe, but it adds telemetry (Spider service) to provide enterprises the on-demand data collection for analysis, such as IP address. Because of this, the end-user must accept <a href="https://github.com/ImageGlass/Spider/blob/develop/PRIVACY.md" target="_blank">the Privacy policy</a> before they can use it, they can disable the telemetry service in the setting, too. ImageGlass Spider is sponsored by <a href="https://spider.com" target="_blank">spider.com</a>.
            </p>
            <p>ImageGlass Spider is also free and open-source, you can access the source code at <a href="http://github.com/ImageGlass/Spider" target="_blank">github.com/ImageGlass/Spider</a>.
            </p>
            <p>
                You can download it at <a href="https://imageglass.org/spider">imageglass.org/spider</a>. For those who don't accept the privacy policy, they can use ImageGlass Kobe instead.
            </p>
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