@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">

    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            Supported formats
            <small class="fs-small">Version {{ $_version }}</small>
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post links">
            
            <p>ImageGlass supports the most common image formats.</p>
            <p>While <b>Default formats</b> group are including lightweight image formats and able to be loaded automatically, <b>Optional formats</b> group are not. This is to avoid heavy workloads and performance interruption of the app. Besides, user can easily customize this extension list.</p>

            <h3 id="default-formats" class="mt-5 mb-3 fs-h3">Default formats</h3>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="25%">File extension</th>
                            <th width="20%">Read</th>
                            <th width="20%">Write</th>
                            <th width="35%">Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>bmp</code></td>
                            <td>x</td>
                            <td>x</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>cur</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>cut</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>dib</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>emf</code></td>
                            <td>x</td>
                            <td>x</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>exif</code></td>
                            <td>x</td>
                            <td>x</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>gif</code></td>
                            <td>x</td>
                            <td>x</td>
                            <td>Support writing the first image frame.</td>
                        </tr>
                        <tr>
                            <td><code>heic</code></td>
                            <td>x</td>
                            <td></td>
                            <td>Non-animated format.</td>
                        </tr>
                        <tr>
                            <td><code>ico</code></td>
                            <td>x</td>
                            <td>x</td>
                            <td>The biggest image will be displayed.</td>
                        </tr>
                        <tr>
                            <td><code>jfif</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>jpe</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>jpeg</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>jpg</code></td>
                            <td>x</td>
                            <td>x</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>pbm</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>pcx</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>pgm</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>png</code></td>
                            <td>x</td>
                            <td>x</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>ppm</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>svg</code></td>
                            <td>x</td>
                            <td></td>
                            <td>
                                - No scales.<br/>
                                - Not support SVG files which use style sheets (ImageMagick limitation).
                            </td>
                        </tr>
                        <tr>
                            <td><code>tif</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>tiff</code></td>
                            <td>x</td>
                            <td>x</td>
                            <td>Support reading/writing single page only.</td>
                        </tr>
                        <tr>
                            <td><code>webp</code></td>
                            <td>x</td>
                            <td></td>
                            <td>Support reading non-animated format only.</td>
                        </tr>
                        <tr>
                            <td><code>wmf</code></td>
                            <td>x</td>
                            <td>x</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>wpg</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>xbm</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>xpm</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>(base-64 string)</td>
                            <td>x</td>
                            <td>x</td>
                            <td>Read through the Clipboard <kbd>Ctrl+V</kbd></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <h3 id="optional-formats" class="mt-5 mb-3 fs-h3">Optional formats</h3>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="25%">File extension</th>
                            <th width="20%">Read</th>
                            <th width="20%">Write</th>
                            <th width="35%">Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>exr</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>hdr</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>psd</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>tga</code></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="https://en.wikipedia.org/wiki/Raw_image_format" target="_blank" rel="noopener">
                                    RAW
                                </a>
                                formats
                            </td>
                            <td>x</td>
                            <td></td>
                            <td>
                                required 
                                <a href="https://en.wikipedia.org/wiki/Windows_Imaging_Component" target="_blank" rel="noopener">
                                    WIC
                                </a>
                                installed
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </article>
    
        <aside class="col-md-4 col-lg-4 col-xxl-3 col-hg-2 px-0 px-md-3 aside">
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