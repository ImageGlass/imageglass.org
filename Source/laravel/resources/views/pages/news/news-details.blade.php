@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">

    <div class="row no-gutters justify-content-center">
        <article class="col-lg-10 col-xl-9 col-xxl-8 col-hg-7 article-post">
            <picture class="article-img">
                <source media="(max-width: 1920px)" srcset="https://picsum.photos/1000/400/?random">
                <source media="(max-width: 1440px)" srcset="https://picsum.photos/1000/400/?random">
                <source media="(max-width: 1200px)" srcset="https://picsum.photos/1000/400/?random">
                <source media="(max-width: 992px)" srcset="https://picsum.photos/1000/400/?random">
                <source media="(max-width: 768px)" srcset="https://picsum.photos/1000/400/?random">
                <source media="(max-width: 576px)" srcset="https://picsum.photos/1000/400/?random">
                <img src="https://picsum.photos/1000/400/?random" alt="Flowers">
            </picture>

            <h2 class="px-3 fs-h1 mb-4">
                {{ $news_item["title"] }}
            </h2>
    
            <div class="px-3 article-body">
                {!! $news_item["content"] !!}
            </div>
    
            <footer class="px-3">
                xxxxx
            </footer>
        </article>
        

    </div>
    

</section>



@stop