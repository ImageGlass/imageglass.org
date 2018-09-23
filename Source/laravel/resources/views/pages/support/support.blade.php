@extends("layouts._layout")
@section("_body_content")


<section class="container py-4 py-lg-5">
    <div class="row no-gutters">
        <article class="col-12 article-post">    
            <h2 class="fs-h1 mb-4">
                Support
            </h2>
    
            <section class="article-body">
                <p>
                    <strong>Ask everything you’re looking for.</strong>
                </p>

                <p>
                    Got a question? Need help with a problem?<br/>
                    You’re in the right place to find all the ImageGlass customer and technical support you need!
                </p>

                <div class="mt-4">
                    <ul class="row list-support">
                        <li class="col-sm-6 col-md-4 col-lg-3">
                            <a class="eff-reveal-border fs-small" target="_blank" rel="noopener" href="https://groups.google.com/forum/#!forum/imageglass">
                                <span class="eff-reveal">
                                    <span class="item-icon">
                                        <span class="icon-support-user link"></span>
                                    </span>
            
                                    <h3 class="fs-h3 mt-1">For non-technical users</h3>
                                    <p class="mt-1 mb-0">
                                        Use your Google account to follow ImageGlass updates, or ask a question.
                                    </p>
                                </span>
                            </a>
                        </li>

                        <li class="col-sm-6 col-md-4 col-lg-3">
                            <a class="eff-reveal-border fs-small" target="_blank" rel="noopener" href="https://github.com/d2phap/ImageGlass/issues">
                                <span class="eff-reveal">
                                    <span class="item-icon">
                                        <span class="icon-support-dev link"></span>
                                    </span>
                                    <h3 class="fs-h3 mt-1">For developers</h3>
                                    <p class="mt-1 mb-0">
                                        Track development progress, leave feedbacks or bugs by Github account.
                                    </p>
                                </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>

            </section>
        </article>
    
        <section class="col-12 google-group">
            <iframe id="forum_embed" src="javascript:void(0)" scrolling="no" frameborder="0" width="100%" height="800"></iframe>
        </section>
    </div>
</section>

@stop