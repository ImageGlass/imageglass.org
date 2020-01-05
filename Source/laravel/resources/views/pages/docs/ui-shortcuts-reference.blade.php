@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">
    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            UI Shortcuts Reference
            <small class="fs-small">Version {{ $_version }}</small>
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post links">
            <p>ImageGlass has several built-in shortcut keys that can save you time in your daily workflows.</p>
            <p>This guide provides a quick reference to each shortcut available in ImageGlass. You can also find shortcuts in tooltips or menus. Hover over an element to display its tooltip. If the element has a shortcut, the tooltip will include it.</p>

            <h3 class="mt-5 fs-h3">Keyboard shortcuts</h3>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Common features</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">Open main menu</td>
                            <td width="40%">
                                <kbd>`</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Send the viewing image to other apps</td>
                            <td>
                                <kbd>Ctrl+(drag)</kbd> <span class="icon-info" title="Hold CTRL key and drag the image to other apps"></kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Horizontal / Vertical scrolling</td>
                            <td>
                                <kbd>Ctrl | Shift | Alt+(scroll)</kbd> <span class="icon-info" title="Hold CTRL / SHIFT / ALT key and scroll mouse wheel. Configurable in Settings > Image"></kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Panning image</td>
                            <td>
                                <kbd>Up | Down | Left | Right</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Window fit</td>
                            <td>
                                <kbd>F9</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Frameless</td>
                            <td>
                                <kbd>F10</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Moving frameless window</td>
                            <td>
                                <kbd>Shift+(drag)</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Full screen</td>
                            <td>
                                <kbd>Alt+Enter</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Settings</td>
                            <td>
                                <kbd>Ctrl+Shift+P</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Exit ImageGlass</td>
                            <td>
                                <kbd>ESC</kbd> <span class="icon-info" title="Must enable the setting: 'Allow to press ESC to quit application'"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">File</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">Open file</td>
                            <td width="40%">
                                <kbd>Ctrl+O</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Open image data from clipboard</td>
                            <td>
                                <kbd>Ctrl+V</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Open new window</td>
                            <td>
                                <kbd>Ctrl+N</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Save image as ...</td>
                            <td>
                                <kbd>Ctrl+S</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Edit image</td>
                            <td>
                                <kbd>Ctrl+E</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Print</td>
                            <td>
                                <kbd>Ctrl+P</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Refresh</td>
                            <td>
                                <kbd>F5</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Reload image</td>
                            <td>
                                <kbd>Ctrl+R</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Reload image list</td>
                            <td>
                                <kbd>Ctrl+Shift+R</kbd>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Nagivation</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">View next image</td>
                            <td width="40%">
                                <kbd>Right arrow</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></span>,<br/>
                                <kbd>PageUp</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></span>, <br/>
                                <kbd>Backspace</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>View previous image</td>
                            <td>
                                <kbd>Left arrow</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></span>,<br/>
                                <kbd>PageDown</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></span>, <br/>
                                <kbd>Space</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Go to ...</td>
                            <td>
                                <kbd>Ctrl+G</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Go to the first image</td>
                            <td>
                                <kbd>Home</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Go to the last image</td>
                            <td>
                                <kbd>End</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>View next page</td>
                            <td>
                                <kbd>Ctrl+Right arrow</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>View previous page</td>
                            <td>
                                <kbd>Ctrl+Left arrow</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>View the first page</td>
                            <td>
                                <kbd>Ctrl+Home</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>View the last page</td>
                            <td>
                                <kbd>Ctrl+End</kbd>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Zoom</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">Zoom in</td>
                            <td width="40%">
                                <kbd>+</kbd>,<br/>
                                <kbd>NumPad+</kbd>,<br/>
                                <kbd>Ctrl+=</kbd>,<br/>
                                <kbd>Ctrl+NumPad+</kbd>, <br/><br/>

                                <kbd>Ctrl+(mousewheel)</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Zoom out</td>
                            <td>
                                <kbd>-</kbd>,<br/>
                                <kbd>NumPad-</kbd>,<br/>
                                <kbd>Ctrl+-</kbd>,<br/>
                                <kbd>Ctrl+NumPad-</kbd>, <br/><br/>

                                <kbd>Ctrl+(mousewheel)</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Actual size</td>
                            <td>
                                <kbd>0</kbd>,<br/>
                                <kbd>Ctrl+0</kbd>,<br/>
                                <kbd>Ctrl+NumPad0</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Auto Zoom</td>
                            <td>
                                <kbd>Ctrl+A</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Scale to width</td>
                            <td>
                                <kbd>Ctrl+W</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Scale to height</td>
                            <td>
                                <kbd>Ctrl+H</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Scale to fit</td>
                            <td>
                                <kbd>Ctrl+/</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Scale to fill</td>
                            <td>
                                <kbd>Ctrl+D</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Lock zoom ratio</td>
                            <td>
                                <kbd>Ctrl+L</kbd>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Image</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">View channels</td>
                            <td width="40%">
                                N/A
                            </td>
                        </tr>
                        <tr>
                            <td>Rotate left</td>
                            <td>
                                <kbd>Ctrl+,</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Rotate right</td>
                            <td>
                                <kbd>Ctrl+.</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Flip horizontal</td>
                            <td>
                                <kbd>Ctrl+;</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Flip vertical</td>
                            <td>
                                <kbd>Ctrl+'</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Rename image</td>
                            <td>
                                <kbd>F2</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Move image to recycle bin</td>
                            <td>
                                <kbd>Del</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Delete image from hard disk</td>
                            <td>
                                <kbd>Shift+Del</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Extract image pages</td>
                            <td>
                                <kbd>Ctrl+J</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Start / Stop animating image</td>
                            <td>
                                <kbd>Ctrl+Space</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Set as desktop background</td>
                            <td>
                                N/A
                            </td>
                        </tr>
                        <tr>
                            <td>Set as Lock screen image</td>
                            <td>
                                N/A
                            </td>
                        </tr>
                        <tr>
                            <td>Open image location</td>
                            <td>
                                <kbd>Ctrl+Shift+L</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Image properties</td>
                            <td>
                                <kbd>Ctrl+I</kbd>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Clipboard</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">
                                Copy multiple files <span class="icon-info" title="Copy multiple image files to clipboard, you will be able to paste them in File Explorer as files"></span>
                            </td>
                            <td width="40%">
                                <kbd>Ctrl+C</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Copy image data <span class="icon-info" title="Copy image bitmap data to clipboard, you will be able to paste this in MS Paint as bitmap"></span></td>
                            <td>
                                <kbd>Ctrl+Shift+C</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Cut multiple files <span class="icon-info" title="Cut multiple image files to clipboard, you will be able to paste them in File Explorer as files"></span></td>
                            <td>
                                <kbd>Ctrl+X</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Copy image path</td>
                            <td>
                                N/A
                            </td>
                        </tr>
                        <tr>
                            <td>Clear clipboard</td>
                            <td>
                                <kbd>Ctrl+`</kbd>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Slideshow</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">Start slideshow</td>
                            <td width="40%">
                                <kbd>F11</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Pause / Resume slideshow</td>
                            <td>
                                <kbd>Space</kbd> <span class="icon-info" title="Configurable in Settings > Keyboard"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Exit slideshow</td>
                            <td>
                                <kbd>ESC</kbd>, <br/>
                                <kbd>F11</kbd>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Layout</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">Toolbar</td>
                            <td width="40%">
                                <kbd>Ctrl+F1</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Thumbnail panel</td>
                            <td>
                                <kbd>Ctrl+T</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Checked background</td>
                            <td>
                                <kbd>Ctrl+B</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Keep window always on top</td>
                            <td>
                                N/A
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Tools</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">Color Picker</td>
                            <td width="40%">
                                <kbd>Ctrl+Shift+K</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Page navigation</td>
                            <td>
                                <kbd>Ctrl+Shift+J</kbd>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Help</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">About</td>
                            <td width="40%">
                                <kbd>F1</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Check for update</td>
                            <td>
                                N/A
                            </td>
                        </tr>
                        <tr>
                            <td>Report an issue</td>
                            <td>
                                N/A
                            </td>
                        </tr>
                        <tr>
                            <td>First-launch configurations</td>
                            <td>
                                N/A
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