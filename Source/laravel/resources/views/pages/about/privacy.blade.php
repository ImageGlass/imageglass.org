@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">
    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            Privacy information
        </h2>
        <p>
            Our privacy information covers two distinct entities: the software that is installed onto your computer, and this website.<br/>
            Please be noted that this privacy information may be updated without notice.
        </p>
        <div class="separator my-5"></div>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post">
            <h3 class="fs-h2">Software</h3>
            <p>
                There are currently two (2) releases of ImageGlass: "Microsoft Store" and "Classic". The Microsoft Store release is available on Microsoft Store while the Classic release is downloadable from this website.
            </p>
            <p>
                Both releases of ImageGlass will anonymously append a query string when you open a link from the software to this website. This allows us to count how many installations there are for each version of ImageGlass, and how many install/update attempts were successful or not.
            </p>

            <div class="pl-3">
                <h4 class="fs-h3">Microsoft Store release</h4>
                <p>
                    ImageGlass, as a software, does not, in any way, collect or transmit any personal information. In fact, no information (personal or not) is ever collected or transmitted except as described in the above paragraph for the purpose of checking for and installing updates.
                </p>
            </div>


            <div class="pl-3">
                <h4 class="fs-h3">Classic release</h4>
                <p>
                    ImageGlass, as a software, periodically checks for updates. This is done by downloading a small file from the website and is anonymous. You can disable this from the <i>Settings</i> dialog.
                </p>
                <div class="pl-3">
                    <h5 class="fs-h4 fw-bold">From version 8.4 and later</h5>
                    <p>
                        ImageGlass, as a software, shares available resources with 
                        <a href="https://www.spider.com" target="_blank" rel="noopener noreferrer"><i>Spider.com</i></a> customers, as a Spider service, to pass traffic through your device in return for free use of this software.
                    </p>
                    <p>
                        Your device resources will be used <u>ONLY</u> in a manner that will not substantially affect the device's operation. None of your personal information is accessed (except the device IP).Your resources will <u>NOT</u> be used for computer services such as crypto mining, storage, etc. You can stop sharing resources at any time in the Settings dialog. You can learn more about
                        <a href="https://www.spider.com/privacy-policy" target="_blank" rel="noopener noreferrer">Spider's privacy policy</a>.
                    </p>
                    <p>
                        As an end-user, you may be notified of this policy in the <i>First-launch configurations</i> dialog. You can always stop, disable this Spider service anytime in the <i>Settings</i> dialog. ImageGlass also provides a guide in details for those people who want to modify and redistribute the software package to totally remove this service, you can learn more about it at: <a href="https://imageglass.org/docs/spider-service">imageglass.org/docs/spider-service</a>.
                    </p>
                </div>
            </div>


            <div class="separator my-5"></div>
			<h3 class="fs-h2">Website</h3>
            <p>
                This site is monetized with Carbon Ads. They may use cookies to collect information in the course of ads being served on this website. They may use information about your visits to this and other websites in order to provide advertisements about goods and services deemed to possibly be of interest to you.
            </p>

            <div class="separator my-5"></div>
            <p class="text-right">
                <i>Last update: Jan 12th, 2022.</i>
            </p>
        </article>
    
        <aside class="col-md-4 col-lg-4 col-xxl-3 col-hg-2 px-0 px-md-3 aside">
            @include("shared._ads")
            @include("modules.aside.article-list")
        </aside>
    </div>
</section>

@stop