<section class="bg-box home-top">
    <div class="bg-box-content">
        <div class="container pt-5">

            <h1 class="fs-h1 text-center slogan">
                A lightweight, versatile image viewer
            </h1>

            <div class="text-center mt-4">
                <a href="{{ url("download") }}" class="btn btn-download eff-reveal-border">
                    <span class="eff-reveal">
                        <i class="icon icon-download"></i>
                        DOWNLOAD
                    </span>
                </a>
            </div>

            <div class="text-center mt-2 download-version">
                <span>ImageGlass</span>
                <span>{{ $release_item["version"] }}</span>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-4">
                    @include("shared._ads")
                </div>
            </div>

            <section class="row justify-content-center mt-5">
                <div class="col-hg-7 col-xxl-8 col-xl-9 col-lg-10 col-12">
                    <div class="embed-responsive embed-responsive-16by9 top-video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/d2ZCAZE0el4?rel=0&amp;controls=0&amp;showinfo=0" title="Introduction video"></iframe> 
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>