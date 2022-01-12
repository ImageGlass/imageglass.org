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
            <p>
                This section provides full details about how to totally disable and remove the Spider service from ImageGlass.
            </p>


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
                    🕸 Disable Spider service using
                    <a href="https://imageglass.org/docs/app-configs">
                        configuration files
                    </a>
                </h3>
                <p>
                    Spider service is controlled by <code>IsEnableSpiderService</code> setting, it's set to <code>True</code> by default. You can change this value to <code>False</code> in one of the config files: <code>igconfig.xml</code>, or <code>igconfig.admin.xml</code>.
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


            <h3 class="mt-5 mb-3 fs-h3">🕸 Permanently remove Spider service from ImageGlass</h3>
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