@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">
    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            App configuration
            <small class="fs-small">Version {{ $_version }}</small>
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post links">
            <p>Learn how to control ImageGlass over configuration, pre-define or even lock some settings at installation.</p>

            {{-- Configuration directory --}}
            <h3 id="configuration-directory" class="mt-5 mb-3 fs-h3">Configuration directory</h3>
            <p>There are 2 phrases when talking about the working directory in ImageGlass:</p>
            <ul>
                <li>
                    <i><b><u>Startup dir</u></b></i>: is the folder where ImageGlass.exe located in, also called as installed dir. E.g: <code>C:\Program Files\ImageGlass\</code>
                </li>
                <li>
                    <i><b><u>Config dir</u></b></i>: is the folder that contains ImageGlass setting file (igconfig.xml) and others, located in <code>%AppData%\ImageGlass\</code>. In portable mode, Config dir is also <i><b><u>Startup dir</u></b></i>.
                </li>
            </ul>


            {{-- Configuration files --}}
            <h3 id="configuration-files" class="mt-5 mb-3 fs-h3">Configuration files</h3>
            <p>ImageGlass knows of 3 different files, which are loaded in the following order:</p>
            <ul>
                <li>
                    <code>igconfig.default.xml</code>, located in <i><b><u>Startup dir</u></b></i>, specifies the defaults which are used if no other settings are available at first start.
                </li>
                <li>
                    <code>igconfig.xml</code>, located in <i><b><u>Config dir</u></b></i>, contains all user settings, written by ImageGlass after closing. This overrules the settings in the <code>igconfig.default.xml</code> file.
                </li>
                <li>
                    <code>igconfig.admin.xml</code>, located in <i><b><u>Startup dir</u></b></i>, contains the settings which will overrule all settings in the files above.
                </li>
            </ul>
            <p>
                ImageGlass will look for every mentioned file, in the described order, and the locations. The configuration is built from zero, setting for setting, by using the following 4 steps:
            </p>
            <ol>
                <li>Take the default set by the developer.</li>
                <li>If a <code>igconfig.default.xml</code> was found, and the settings can be found in there, it will override the values from step 1.</li>
                <li>If a <code>igconfig.xml</code> was found, and the setting can be found in there, it will override the values from step 2.</li>
                <li>If a <code>igconfig.admin.xml</code> was found, and the setting can be found in there, it will override the values from step 3.</li>
            </ol>
            <p>
                ImageGlass will use the resulting setting, and when every single setting in the complete configuration is processed, it will write the complete configuration to it's <code>igconfig.xml</code> file (and only there).
            </p>


            {{-- Upgrade guide --}}
            <h3 id="upgrade-guide" class="mt-5 mb-3 fs-h3">Upgrade guide</h3>
            <p>
                When you upgrade ImageGlass to a newer version, you may get a message box warning that some settings are not compatible and you should update them before continuing. This section will list down breaking changes from the settings that you should apply maunally in your configuration files.
            </p>
            <h4 class="mt-4 fs-h4">Upgrading to 7.5</h4>
            <div class="table-responsive">
                <table class="col-12 table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="40%">Setting</th>
                            <th width="30%">Old value</th>
                            <th width="30%">New value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Array item separator</td>
                            <td>
                                <code>,</code><br/>E.g.<br/>
                                <code>key="FrmMainWindowsBound" value="280,125,1329,849"</code>
                            </td>
                            <td>
                                <code>;</code><br/>E.g.<br/>
                                <code>key="frmMain.WindowsBound" value="280;125;1329;849"</code><br/>
                                <code>key="ToolbarButtons" value="btnBack;btnNext;Separator;"</code>
                            </td>
                        </tr>
                        <tr>
                            <td>Pair value item separator in array</td>
                            <td>
                                <code>,</code><br/>E.g.<br/>
                                <code>key="KeyboardActions" value="0,0;1,3;"</code>
                            </td>
                            <td>
                                <code>;</code><br/>E.g.<br/>
                                <code>key="KeyboardActions" value="LeftRight:PrevNextImage;PageUpDown:PrevNextImage;"</code>
                            </td>
                        </tr>
                        <tr>
                            <td>List item value stored as</td>
                            <td>
                                <code>number</code><br/>E.g.<br/>
                                <code>key="ToolbarPosition" value="0"</code><br/>
                                <code>key="ToolbarButtons" value="0,1,-1"</code>
                            </td>
                            <td>
                                <code>item name</code><br/>E.g.<br/>
                                <code>key="ToolbarPosition" value="Top"</code><br/>
                                <code>key="ToolbarButtons" value="btnBack;btnNext;Separator;"</code>
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