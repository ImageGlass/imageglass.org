@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">

    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            Command line utilities
            <small class="fs-small">Version {{ $_version }}</small>
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post links">
            
            <p>Learn how to manage ImageGlass using built-in command lines like a pro. These can be useful to system administrators, and to other programs calling the application.</p>

            <h3 id="default-formats" class="mt-5 mb-3 fs-h3">ImageGlass EXE installer</h3>
            <p>
                ImageGlass EXE installer is compiled by Inno Setup, and accepts its optional command line parameters (such as silent installing). To see all available parameters, please go to:<br/>
                <a href="http://www.jrsoftware.org/ishelp/index.php?topic=setupcmdline" target="_blank" rel="noreferrer noopener">
                    http://www.jrsoftware.org/ishelp/index.php?topic=setupcmdline
                </a>
            </p>

            <h3 id="optional-formats" class="mt-5 mb-3 fs-h3">Non-administrative commands</h3>
            <p>
                The following commands are located in <code>igcmd.exe</code> file. For the details how it works, please check the 
                <a href="https://github.com/d2phap/ImageGlass/blob/master/Source/Ultilities/igcmd/Program.cs" target="_blank" rel="noreferrer noopener">
                    source code
                </a>.
            </p>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="30%">Function</th>
                            <th width="70%">Command</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Set desktop wallpaper</td>
                            <td>
                                <code>igcmd.exe setwallpaper &lt;string imgPath&gt; [int style]</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Display Check for update dialog</td>
                            <td>
                                <code>igcmd.exe igupdate</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Check for update without GUI</td>
                            <td>
                                <code>igcmd.exe igautoupdate</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Display First-launch configurations dialog</td>
                            <td>
                                <code>igcmd.exe firstlaunch</code>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <h3 id="optional-formats" class="mt-5 mb-3 fs-h3">Non-administrative commands (Windows 10 only)</h3>
            <p>
                The following commands are located in <code>igcmdWin10.exe</code> file. For the details how it works, please check the 
                <a href="https://github.com/d2phap/ImageGlass/blob/master/Source/Ultilities/igcmdWin10/Program.cs" target="_blank" rel="noreferrer noopener">
                    source code
                </a>.
            </p>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="30%">Function</th>
                            <th width="70%">Command</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Set lock screen image</td>
                            <td>
                                <code>igcmdWin10.exe setlockimage</code>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <h3 id="optional-formats" class="mt-5 mb-3 fs-h3">Administrative commands</h3>
            <p>
                The following commands are located in <code>igtasks.exe</code> file. For the details how it works, please check the 
                <a href="https://github.com/d2phap/ImageGlass/blob/master/Source/Ultilities/igtasks/Program.cs" target="_blank" rel="noreferrer noopener">
                    source code
                </a>.
            </p>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="30%">Function</th>
                            <th width="70%">Command</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Set desktop wallpaper</td>
                            <td>
                                <code>igtasks.exe setwallpaper &lt;string imgPath&gt; [int style]</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Register file associations</td>
                            <td>
                                <code>igtasks.exe regassociations &lt;string exts&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Delete all file associations</td>
                            <td>
                                <code>igtasks.exe delassociations</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Install new language pack</td>
                            <td>
                                <code>igtasks.exe iginstalllang</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Create a new language pack</td>
                            <td>
                                <code>igtasks.exe ignewlang</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Edit a language pack</td>
                            <td>
                                <code>igtasks.exe igeditlang &lt;string filename&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Register URI Scheme for Web-to-App linking</td>
                            <td>
                                <code>igtasks.exe reg-uri-scheme</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Delete URI Scheme registry</td>
                            <td>
                                <code>igtasks.exe del-uri-scheme</code>
                            </td>
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