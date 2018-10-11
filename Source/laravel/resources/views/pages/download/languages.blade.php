@extends("layouts._layout_listing")
@section("_page_title")
    All Language Packs
@stop

@section("_page_subtitle")
    We use Crowdin to translate ImageGlass, feel free to change at: <a href="https://crowdin.com/project/imageglass/invite" target="_blank" rel="noopener noreferrer">https://crowdin.com/project/imageglass/invite</a>.<br/>
    To request new language pack, you can drop me an email.

    <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-12 mb-0 mt-4">
        <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 col-hg-3 mb-0">
                @include("shared._ads")
            </div>
        </div>
    </div>
@stop

@section("_article_list")
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-12 language-list">
            <div class="row">

                @foreach ($language_list as $item)
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 col-hg-1 px-2 language-item">
                    <article class="eff-reveal-border">
                        <a class="language-item-content eff-reveal" data-code="{{ $item->code }}" href="{{ url("language/".$item->code."/download") }}" title="{{ $item->name }}">
                            <img class="img-fluid" src="https://d2srrzh48sp2nh.cloudfront.net/01be2c21/images/flags/{{ $item->code }}.png" alt="{{ $item->name }}">

                            <progress class="col-12 px-0" value="{{ $item->approved_progress }}" max="100" title="{{ $item->approved_progress }}% translated"></progress>
                            <h2 class="fs-small">{{ $item->name }}</h2>
                        </a>
                    </article>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10 col-xl-9 col-xxl-8 col-hg-6">
            @include("shared._donation")
        </div>
    </div>
@stop