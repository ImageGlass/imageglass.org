@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">

    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            Privacy information
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post">
            <p>
                Our privacy information covers two distinct entities: the software that is installed onto your computer, and this website. Please be noted that this privacy information may be updated without notice.
            </p>

            <h3 class="fs-h2">Software</h3>
            <p>
                ImageGlass, as a software, does not, in any way, collect or transmit any Personal Information. In fact, no information (personal or not) is ever collected or transmitted except as described in the next paragraph for the purpose of checking for and installing updates.
            </p>
            <p>
                There are currently two (2) releases of ImageGlass: "Classic" and "Windows Store". The Classic release is downloadable from this website. The Windows Store release is available on Microsoft's Windows Store. There are no functionality differences between the releases. However, the Classic release will periodically check for updates. This is done by downloading a small file from the website and is anonymous. You can disable this from the Settings dialog. Both releases of ImageGlass will anonymously append a query string when you open a link from the software to this website. This allows us to count how many installations there are for each version of ImageGlass, and how many install/update attempts were successful or not.
            </p>

			<h3 class="fs-h2">Website</h3>
            <p>
                This site is monetized with Carbon Ads. They may use cookies to collect information in the course of ads being served on this website. They may use information about your visits to this and other websites in order to provide advertisements about goods and services deemed to possibly be of interest to you.
            </p>

            <div class="separator my-5"></div>
            <p class="text-right">
                <i>Last update: Dec 9th, 2021</i>
            </p>
        </article>
    
        <aside class="col-md-4 col-lg-4 col-xxl-3 col-hg-2 px-0 px-md-3 aside">
            @include("shared._ads")
            @include("modules.aside.article-list")
        </aside>
    </div>
</section>

@stop