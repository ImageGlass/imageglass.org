@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">

    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            Features
            <small class="fs-small">Version {{ $_version }}</small>
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post links">
            
            <p>ImageGlass is another open source basic image viewer, which, while simple, benefits from the speed that comes with being so lightweight, and is a good choice for Windows users.</p>

            <div class="mt-3 embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/d2ZCAZE0el4?rel=0&amp;showinfo=0"></iframe> 
            </div>


            <h3 id="image-viewing" class="mt-5 mb-3 fs-h3">Image viewing</h3>
            <ul>
                <li>Supports over <a href="{{ url('/documentation/supported-formats') }}" title="View all supported image formats" target="_blank">70+ common image formats</a>, including PNG, GIF, SVG*, WEBP*, HEIC, RAW,...</li>
                <li>Losslessly rotate / save the viewing image.</li>
                <li>Ability of opening image from clipboard directly.</li>
                <li>Rapidly switch between images.</li>
                <li>Drag-n-Drop viewing image supported.</li>
                <li>Real-time update the viewing image.</li>
                <li>Works great with GIF format: extract image frames, play/pause animation.</li>

                <li class="mt-1">5 zoom modes: Auto Zoom, Scale to Width, Scale to Height, Zoom to Fit, Lock Zoom Ratio.</li>
                <li>Various image navigation options: shortcuts, mousewheel</li>
                <li>Horizontal / Vertical image scrolling.</li>
                <li>Fast thumbnail preview.</li>
                <li>Thumbnail images can be shown in the current viewing folder.</li>
                <li>Color Picker tool allows user to pick and convert color to 4 formats: RGBA, HEXA, CMYK, HSLA.</li>
                <li>Slideshow viewing functionality.</li>
                <li>Conversion can be made in up to <a href="{{ url('/documentation/supported-formats') }}" title="View all supported image formats" target="_blank">10 different formats</a>.</li>
                <li>Possibility of sharing the image being viewed to Facebook.</li>
                <li><a href="{{ url('/documentation/ui-shortcuts-reference') }}" title="View all shortcuts" target="_blank">Quick shortcuts</a> supported.</li>

                <li class="mt-1">Clean nice modern minimal UI; posibility of hide/show toolbar.</li>
                <li><a href="{{ url('download/themes') }}" title="View all theme packs" target="_blank">Different theme packs</a> available to change the look of the interface.</li>
                <li><a href="{{ url('download/languagepacks') }}" title="View all language packs" target="_blank">Multilanguage support</a>, which makes the user able to create its own packs.</li>
            </ul>


            <h3 id="image-editing" class="mt-5 mb-3 fs-h3">Image editing</h3>
            <p>ImageGlass is aimed to be an lightweight, versatile <i>image viewer</i>, Edit function will open an external associated application.</p>
            <p>There are a lot of awesome apps for better editing feature. We are happy to provide you a quick look of those image formats.</p>

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