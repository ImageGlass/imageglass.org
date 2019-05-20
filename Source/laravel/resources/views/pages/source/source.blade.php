@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">

    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            Source
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post">
            <p class="links">
                <b>
                    ImageGlass is released under the terms of the <a id="repoLicense" href="https://github.com/d2phap/ImageGlass/blob/master/LICENSE" target="_blank" rel="noopener noreferrer">
                        GNU General Public License v3.0
                    </a>.
                </b><br>
                By downloading / using ImageGlass, you agree with all the terms of this license.
            </p>

            <h3 class="fs-h3 mt-4">
                Github Repository
            </h3>

            <div class="row no-gutters mt-3">
                <table class="col-md-4 table">
                    <tbody>
                        <tr>
                            <td>Stars</td>
                            <td id="repoStars">⭐</td>
                        </tr>
                        <tr>
                            <td>Folks</td>
                            <td id="repoFolks"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                <a class="btn btn-primary" href="https://github.com/d2phap/ImageGlass" target="_blank" rel="noopener noreferrer">
                    <i class="icon-github mr-1"></i>
                    Check Out
                </a>
            </div>

            <div class="mt-5 pt-3">
                @include("shared._donation")
            </div>
        </article>
    
        <aside class="col-md-4 col-lg-4 col-xxl-3 col-hg-2 px-0 px-md-3 aside">
            @include("shared._ads")
            @include("modules.aside.article-list")
        </aside>
    </div>

    
</section>

@stop