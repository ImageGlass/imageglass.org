@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">

    <div class="row no-gutters">
        
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post">    
            <h2 class="fs-h1 mb-4">
                {{ $news_item["title"] }}
            </h2>
    
            <section class="article-body">
                {!! $news_item["content"] !!}
            </section>
        </article>
    
        <aside class="col-md-4 col-lg-4 col-xxl-3 col-hg-2 px-0 px-md-3 aside">
            @include("modules.aside.post-info")
            @include("modules.aside.article-list")
        </aside>
    </div>
    

</section>



@stop