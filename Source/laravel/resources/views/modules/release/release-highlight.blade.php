<section class="bg-box release-highlight">
    <div class="bg-box-content">
        <div class="container py-5">

            <h1 class="fs-h1 text-center slogan">
                {{ $release_item["title"] }}
            </h1>

            <div class="text-center mt-4">
                <a href="/download" class="btn btn-download eff-reveal-border">
                    <span class="eff-reveal">
                        <i class="icon icon-download"></i>
                        DOWNLOAD
                    </span>
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