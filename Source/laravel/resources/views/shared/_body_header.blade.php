<input type="checkbox" class="chk-dropdown" id="chkMobileMenu">

<header id="header">
    <div class="container header-bar">
        <div class="menu-group">
            <div class="menu-item menu-logo">
                <a href="{{ url("/") }}" title="{{ @$_sitename }}">
                    <span>
                        ImageGlass
                    </span>
                </a>
            </div>
        </div>
        <div class="menu-group menu-right">
            <div class="menu-group">
                <div class="menu-item d-flex">
                    <label for="chkMobileMenu" class="chk-dropdown-toggler mobile-menu-toggler">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </label>
                </div>
            </div>


            <ul class="menu-group main-menu">
                <li class="menu-item {{ strpos(@$_page, "news") !== false ? "active" : "" }}">
                    <a href="{{ url("/news") }}" class="eff-reveal">
                        <span>
                            NEWS
                        </span>
                    </a>
                </li>
                <li class="menu-item submenu {{ strpos(@$_page, "download") !== false ? "active" : "" }}">
                    <a href="{{ url("/download") }}" class="eff-reveal">
                        <span>
                            DOWNLOAD
                        </span>
                    </a>
                    <ul class="submenu-group">
                        <li class="menu-item {{ strpos(@$_page, "spider") !== false ? "active" : "" }}">
                            <a href="{{ url("/spider") }}" class="eff-reveal">
                                <span>
                                    ImageGlass Spider
                                    <img src="https://imageglass.org/img/spider.svg" alt="Spider" height="18" style="filter: drop-shadow(0 0 1px black);">
                                </span>
                            </a>
                        </li>
                        <li class="menu-item {{ strpos(@$_page, "moon") !== false ? "active" : "" }}">
                            <a href="{{ url("/moon") }}" class="eff-reveal">
                                <span>
                                    ImageGlass Moon 🌙
                                </span>
                            </a>
                        </li>
                        <li class="menu-item {{ strpos(@$_page, "release") !== false ? "active" : "" }}">
                            <a href="{{ url("/releases") }}" class="eff-reveal">
                                <span>
                                    All Releases
                                </span>
                            </a>
                        </li>
                        <li class="menu-item {{ strpos(@$_page, "theme") !== false ? "active" : "" }}">
                            <a href="{{ url("/themes") }}" class="eff-reveal">
                                <span>
                                    Themes
                                </span>
                            </a>
                        </li>
                        <li class="menu-item {{ strpos(@$_page, "language") !== false ? "active" : "" }}">
                            <a href="{{ url("/languages") }}" class="eff-reveal">
                                <span>
                                    Language Packs
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item {{ strpos(@$_page, "docs") !== false ? "active" : "" }}">
                    <a href="{{ url("/docs") }}" class="eff-reveal">
                        <span>
                            DOCS
                        </span>
                    </a>
                </li>
                <li class="menu-item {{ strpos(@$_page, "support") !== false ? "active" : "" }}">
                    <a href="{{ url("/support") }}" class="eff-reveal">
                        <span>
                            SUPPORT
                        </span>
                    </a>
                </li>
                <li class="menu-item {{ strpos(@$_page, "source") !== false ? "active" : "" }}">
                    <a href="{{ url("/source") }}" class="eff-reveal">
                        <span>
                            SOURCE
                        </span>
                    </a>
                </li>
                <li class="menu-item {{ strpos(@$_page, "about") !== false ? "active" : "" }}">
                    <a href="{{ url("/about") }}" class="eff-reveal">
                        <span>
                            ABOUT
                        </span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</header>