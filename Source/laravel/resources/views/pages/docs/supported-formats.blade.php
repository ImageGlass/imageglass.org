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
            <p>ImageGlass supports the most common image formats thanks to Magick.NET library. User can easily customize the extension list to add more file types and open in ImageGlass as long as Magick.NET supports it.</p>

            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="25%">File extension</th>
                            <th width="15%">Read</th>
                            <th width="15%">Write</th>
                            <th width="45%">Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>bmp</code></td>
                            <td>✔</td>
                            <td>✔</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>bpg</code></td>
                            <td>✔</td>
                            <td></td>
                            <td>Required <a href="https://bellard.org/bpg/" title="BPG tools for Windows" ref="noopener nofollow noreferrer">BPG tools for Windows</a> installed.</td>
                        </tr>
                        <tr>
                            <td><code>cur</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>cut</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>dib</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>emf</code></td>
                            <td>✔</td>
                            <td>✔</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>exif</code></td>
                            <td>✔</td>
                            <td>✔</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>exr</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>gif</code></td>
                            <td>✔</td>
                            <td>✔</td>
                            <td>Support writing the first image frame.</td>
                        </tr>
                        <tr>
                            <td><code>hdr</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>heic</code></td>
                            <td>✔</td>
                            <td></td>
                            <td>Non-animated format.</td>
                        </tr>
                        <tr>
                            <td><code>ico</code></td>
                            <td>✔</td>
                            <td>✔</td>
                            <td>Able to view every single page separately.</td>
                        </tr>
                        <tr>
                            <td><code>jfif</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>jpe</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>jpeg</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>jpg</code></td>
                            <td>✔</td>
                            <td>✔</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>pbm</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>pcx</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>pgm</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>png</code></td>
                            <td>✔</td>
                            <td>✔</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>ppm</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>psd</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>svg</code></td>
                            <td>✔</td>
                            <td></td>
                            <td>
                                - No scales.<br/>
                                - Not support SVG files which use style sheets (ImageMagick limitation).
                            </td>
                        </tr>
                        <tr>
                            <td><code>tga</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>tif</code></td>
                            <td>✔</td>
                            <td></td>
                            <td>
                                - Able to view every single page separately.<br/>
                                - Support writing single page only.
                            </td>
                        </tr>
                        <tr>
                            <td><code>tiff</code></td>
                            <td>✔</td>
                            <td>✔</td>
                            <td>
                                - Able to view every single page separately.<br/>
                                - Support writing single page only.
                            </td>
                        </tr>
                        <tr>
                            <td><code>webp</code></td>
                            <td>✔</td>
                            <td></td>
                            <td>Support reading non-animated format only.</td>
                        </tr>
                        <tr>
                            <td><code>wmf</code></td>
                            <td>✔</td>
                            <td>✔</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>wpg</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>xbm</code></td>
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><code>xpm</code></td>
                            <td>✔</td>
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
                            <td>✔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>(base-64 string)</td>
                            <td>✔</td>
                            <td>✔</td>
                            <td>Read through the Clipboard <kbd>Ctrl+V</kbd></td>
                        </tr>
                    </tbody>
                </table>
            </div>

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