
import "../sass/main.scss"

import HeaderModule from "./modules/header-module"
import HomePage from "./pages/home-page"
import NewsPage from "./pages/news-page"
import NewsDetailsPage from "./pages/news-details-page"
import DocsPage from "./pages/docs-page"
import SupportPage from "./pages/support-page"
import SourcePage from "./pages/source-page"
import AboutPage from "./pages/about-page"
import ThemePage from "./pages/theme-page"


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

        case "docs":
            window._currentPage = new DocsPage()
            break

        case "theme":
            window._currentPage = new ThemePage()
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


        case "home":
        default:
            // code for home page
            window._currentPage = new HomePage()
            break
    }


})();


