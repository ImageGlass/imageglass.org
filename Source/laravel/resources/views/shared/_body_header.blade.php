<header id="header">
    <div class="container header-bar">
        <div class="menu-group">
            <div class="menu-item menu-logo">
                <a href="{{ url("/") }}" title="{{ $_sitename }}">
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


            <nav class="menu-group main-menu">
                <li class="menu-item">
                    <a href="{{ url("/news") }}" class="eff-reveal">
                        <span>
                            NEWS
                        </span>
                    </a>
                </li>
                <li class="menu-item submenu">
                    <a href="{{ url("/download") }}" class="eff-reveal">
                        <span>
                            DOWNLOAD
                        </span>
                    </a>
                    <ul class="submenu-group">
                        <li class="menu-item">
                            <a href="{{ url("/moon") }}" class="eff-reveal">
                                <span>
                                    ImageGlass Moon
                                </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url("/themes") }}" class="eff-reveal">
                                <span>
                                    Themes
                                </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url("/languages") }}" class="eff-reveal">
                                <span>
                                    Language Packs
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{ url("/docs") }}" class="eff-reveal">
                        <span>
                            DOCS
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url("/support") }}" class="eff-reveal">
                        <span>
                            SUPPORT
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url("/source") }}" class="eff-reveal">
                        <span>
                            SOURCE
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url("/about") }}" class="eff-reveal">
                        <span>
                            ABOUT
                        </span>
                    </a>
                </li>
            </nav>

        </div>
    </div>
</header>