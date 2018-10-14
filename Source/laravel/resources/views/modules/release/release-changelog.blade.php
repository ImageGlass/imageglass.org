<section class="container py-4 py-lg-5" id="changelog">
    <div class="row">
        <div class="col-lg-8 col-xxl-9 col-hg-10">
            <article class="article-post">    
                <h2 class="fs-h2 mb-3">
                    Changelog
                </h2>
    
                <div class="mt-3">
                    {!! $release_item["changelog"] !!}
                </div>
            </article>
        </div>
    
        <aside class="col-lg-4 col-xxl-3 col-hg-2 aside">
            <section class="aside-post-info">
                <h2 class="fs-h3 mb-3">
                    Requirements
                </h2>
    
                <div class="mt-3">
                    {!! $release_item["requirements"] !!}
                </div>
            </section>
        </aside>
    </div>
</section>