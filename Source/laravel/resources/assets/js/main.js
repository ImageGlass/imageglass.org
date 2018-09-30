
import "../sass/main.scss"

import HeaderModule from "./modules/header-module"
import HomePage from "./pages/home-page"
import NewsPage from "./pages/news-page"
import NewsDetailsPage from "./pages/news-details-page"

import MoonPage from "./pages/moon-page"
import ReleasePage from "./pages/release-page"
import ThemePage from "./pages/theme-page"
import LanguagePage from "./pages/language-page"

import DocsPage from "./pages/docs-page"
import DocsDetailsPage from "./pages/docs-details-page"
import SupportPage from "./pages/support-page"
import SourcePage from "./pages/source-page"
import AboutPage from "./pages/about-page"
import Error404Page from "./pages/error-404-page"



;(async () => {

    HeaderModule.initModule()
    const currentPage = document.getElementsByTagName("html")[0].getAttribute("data-page")

    switch (currentPage) {

        case "news":
            window._currentPage = new NewsPage()
            break

        case "news.details":
            window._currentPage = new NewsDetailsPage()
            break

        case "download.moon":
            window._currentPage = new MoonPage()
            break

        case "download.release":
            window._currentPage = new ReleasePage()
            break

        case "download.theme":
            window._currentPage = new ThemePage()
            break

        case "download.language":
            window._currentPage = new LanguagePage()
            break

        case "docs":
            window._currentPage = new DocsPage()
            break

        case "docs.details":
            window._currentPage = new DocsDetailsPage()
            break

        case "support":
            window._currentPage = new SupportPage()
            break

        case "source":
            window._currentPage = new SourcePage()
            break

        case "about":
            window._currentPage = new AboutPage()
            break

        case "error.404":
            window._currentPage = new Error404Page()
            break


        case "home":
        default:
            // code for home page
            window._currentPage = new HomePage()
            break
    }


})();


