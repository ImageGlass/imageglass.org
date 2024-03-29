<section class="bg-box home-top" style="background-image: url({{ getRandomImg() }});">
    <div class="bg-box-content">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 col-xxl-6">
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

                    <div class="row justify-content-center pt-2 my-3">
                        <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8 col-hg-7 mb-1">
                            <div class="top-news-item item-new">
                                <span>
                                    <span class="news-item-wrap">
                                        <a href="https://imageglass.org/news/announcing-imageglass-8-6-76">
                                            <img src="https://picsum.photos/50/20">
                                        </a>
                                        <a href="https://imageglass.org/news/announcing-imageglass-8-6-76" class="news-item-text">
                                            Announcing ImageGlass 8.6
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8 col-hg-7">
                            <div class="top-news-item">
                                <span>
                                    <span class="news-item-wrap">
                                        <a href="https://imageglass.org/news/announcing-imageglass-moon-9-0-beta-1-75">
                                            <img src="https://picsum.photos/50/21">
                                        </a>
                                        <a href="https://imageglass.org/news/announcing-imageglass-moon-9-0-beta-1-75" class="news-item-text">
                                            Announcing ImageGlass Moon 9.0 beta 1
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                        

                        <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-8 col-hg-7">
                            @include("shared._ads")
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-7 col-xxl-6">
                    <section class="row justify-content-center align-items-end h-100">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9 top-video">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GujLgI4bpuU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
