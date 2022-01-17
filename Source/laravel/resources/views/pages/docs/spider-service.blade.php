@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">
    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            Spider service
            <small class="fs-small">Version 8.4+</small>
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post links">
            <p>
                From version 8.4 (stable release), ImageGlass integrates Spider service (<a href="https://www.spider.com" target="_blank" rel="noopener noreferrer"><i>Spider.com</i></a>) and enables it by default (except the Store release). The Spider service will anonymously starts after 5 seconds when the process <i>ImageGlass.exe</i> is launched. This service shares device IP (none of your personal information is accessed) with Spider.com customers to pass traffic through your device.<br/>
                You can read more about the privacy policy at <a href="https://imageglass.org/privacy">imageglass.org/privacy</a>.
            </p>

            <div>
                <h3 class="mt-5 mb-3 fs-h3">🤔 A tough decision!</h3>
                <p>ImageGlass turns 12 years old in 2022, with 8 major versions, I have been developing and keeping it free, clean and no-ad for all people. During that time, many company offered good amount of money and wanted to inject ads or their tracking code into ImageGlass. I rejected all of them! Because:</p>
                <ul>
                    <li>Their service interrupts user experience.</li>
                    <li>Their service impacts ImageGlass' performance.</li>
                    <li>Their service installs 3rd-party softwares in the installation process anonymously which is tricky to the users when they install ImageGlass, and hard to remove them, too.</li>
                    <li>Their service inserts ads / popups into ImageGlass.</li>
                    <li>No option to disable or remove.</li>
                </ul>

                <p>
                    Come to the Spider service, after 2 months of checking and reviewing their requirements, products and company, I accepted the offer because:
                </p>
                <ul>
                    <li>The service does not hide its existence, lets end-users know, and decide what to do with it.</li>
                    <li>It runs in the background and does not impact app's performance.</li>
                    <li>It comes with an SDK, and can be integrated into ImageGlass without interrupting user experience.</li>
                    <li>With the SDK, I can provide an option for the users to disable, or totally remove it. Users fully control what to do with the service.</li>
                    <li>The company has a reputation, not an unknown product, or scamming profile.</li>
                    <li>The service collects minimum and acceptable resources: Only IP address, no other personal data to be accessed. This still does not sound good, but thinking of when you surf webs: Google, Facebook, Tiktok, Instagram,... and other sites that use Google Ads, Google Analytics,... your IP address is collected without notice.</li>
                </ul>
                <p>
                    <b>More importantly, the Spider service can be totally managed by end-users without requiring technical knowledge.</b>
                    The below section provides full details about how to disable and remove the Spider service from ImageGlass.
                </p>
            </div>


            <div>
                <h3 class="mt-5 mb-3 fs-h3">🕸 Disable Spider service in Settings</h3>
                <ul>
                    <li>
                        Uncheck the option: <i>Enable Spider service</i>.
                    </li>
                    <li>
                        Click <i>Save</i> or <i>Apply</i> button, the Spider service will be completely stopped and disabled immediately.
                    </li>
                </ul>
            </div>


            <div>
                <h3 class="mt-5 mb-3 fs-h3">
                    🕸 Disable the Spider service using
                    <a href="https://imageglass.org/docs/app-configs">
                        configuration files
                    </a>
                </h3>
                <p>
                    The Spider service is controlled by <code>IsEnableSpiderService</code> setting, it's set to <code>True</code> by default. You can change this value to <code>False</code> in one of the config files: <code>igconfig.xml</code>, or <code>igconfig.admin.xml</code>.
                </p>
                <p>
                    <pre><code>&lt;ImageGlass&gt;
  &lt;Configuration&gt;
    &lt;Info description=&quot;ImageGlass Configuration file&quot; version=&quot;7.5&quot; /&gt;
    &lt;Content&gt;
      ...
      &lt;Item key=&quot;IsEnableSpiderService&quot; value=&quot;False&quot; /&gt;
      ...
    &lt;/Content&gt;
  &lt;/Configuration&gt;
&lt;/ImageGlass&gt;</code></pre>
                </p>
            </div>


            <h3 class="mt-5 mb-3 fs-h3">🕸 Permanently remove the Spider service from ImageGlass</h3>
            <p>
                Open startup folder, find the file <code>bs-sdk.dll</code> and delete it. You will not see the Spider service option in <i>Settings > Privacy</i> after this step is done.
            </p>
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