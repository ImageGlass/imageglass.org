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
                            <td>Refresh</td>
                            <td>
                                <kbd>F5</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Reload Image</td>
                            <td>
                                <kbd>Ctrl+F5</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Full screen</td>
                            <td>
                                <kbd>Alt+Enter</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Exit full screen</td>
                            <td>
                                <kbd>Alt+Enter</kbd>, <br/>
                                <kbd>ESC</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Print</td>
                            <td>
                                <kbd>Ctrl+P</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Send the viewing image to other apps</td>
                            <td>
                                <kbd>Ctrl+(drag)</kbd> <span class="icon-info" title='Hold CTRL key and drag the image to other apps'></kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Horizontal / Vertical scrolling</td>
                            <td>
                                <kbd>Ctrl | Shift | Alt+(scroll)</kbd> <span class="icon-info" title='Hold CTRL / SHIFT / ALT key and scroll mouse wheel. Need to configure in Settings dialog > Image tab.'></kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Settings</td>
                            <td>
                                <kbd>Ctrl+Shift+P</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>About</td>
                            <td>
                                <kbd>F1</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>First-launch configurations</td>
                            <td>
                                N/A
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
                            <td>Quit application</td>
                            <td>
                                <kbd>ESC</kbd> <span class="icon-info" title='Must enable the setting: "Allow to press ESC to quit application"'></span>
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
                                <kbd>Right arrow</kbd>,<br/>
                                <kbd>PageUp</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">View previous image</td>
                            <td width="40%">
                                <kbd>Left arrow</kbd>,<br/>
                                <kbd>PageDown</kbd>
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
                            <td width="60%">Pause / Resume slideshow</td>
                            <td width="40%">
                                <kbd>Space</kbd>
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

            <h4 class="mt-4 fs-h4 fw-bold text-color-1">Manipulation</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="60%">Rotate counterclockwise</td>
                            <td width="40%">
                                <kbd>Ctrl+,</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">Rotate clockwise</td>
                            <td width="40%">
                                <kbd>Ctrl+.</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Zoom in</td>
                            <td>
                                <kbd>+</kbd>,<br/>
                                <kbd>NumPad+</kbd>,<br/>
                                <kbd>Ctrl+=</kbd>,<br/>
                                <kbd>Ctrl+NumPad+</kbd>, <br/><br/>

                                
                                <kbd>Ctrl+(mousewheel)</kbd> <span class="icon-info" title='Must enable the setting: "Use the mousewheel to browse images, hold CTRL for zooming"'></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Zoom out</td>
                            <td>
                                <kbd>-</kbd>,<br/>
                                <kbd>NumPad-</kbd>,<br/>
                                <kbd>Ctrl+-</kbd>,<br/>
                                <kbd>Ctrl+NumPad-</kbd>, <br/><br/>

                                <kbd>Ctrl+(mousewheel)</kbd> <span class="icon-info" title='Must enable the setting: "Use the mousewheel to browse images, hold CTRL for zooming"'></span>
                            </td>
                        </tr>
                        <tr>
                            <td>View actual size</td>
                            <td>
                                <kbd>0</kbd>,<br/>
                                <kbd>Ctrl+0</kbd>,<br/>
                                <kbd>Ctrl+NumPad0</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Adjust window to actual image dimentions</td>
                            <td>
                                <kbd>Ctrl+M</kbd>
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
                            <td>Zoom to fit</td>
                            <td>
                                <kbd>Ctrl+/</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td>Lock zoom ratio</td>
                            <td>
                                <kbd>Ctrl+L</kbd>
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
                            <td>Extract image frames</td>
                            <td>
                                <kbd>Ctrl+R</kbd>
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
                            <td width="60%">Copy multiple files</td>
                            <td width="40%">
                                <kbd>Ctrl+C</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">Copy image data</td>
                            <td width="40%">
                                <kbd>Ctrl+Shift+C</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">Cut multiple files</td>
                            <td width="40%">
                                <kbd>Ctrl+X</kbd>
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">Copy image path</td>
                            <td width="40%">
                                N/A
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">Clear clipboard</td>
                            <td width="40%">
                                <kbd>Ctrl+`</kbd>
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