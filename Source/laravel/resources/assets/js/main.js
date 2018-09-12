
import "../sass/main.scss"

import HeaderModule from "./modules/header-module"
import HomePage from "./pages/home-page"
import NewsPage from "./pages/news-page"
import NewsDetailsPage from "./pages/news-details-page"
import DocsPage from "./pages/docs-page"


;(async () => {

    HeaderModule.initModule()
    const currentPage = document.getElementsByTagName("html")[0].getAttribute("data-page")

    switch (currentPage) {

        case "news":
            // code for news page
            window._currentPage = new NewsPage()
            break;

        case "news.details":
            // code for news page
            window._currentPage = new NewsDetailsPage()
            break;

        case "docs":
            // code for docs page
            window._currentPage = new DocsPage()
            break;


        case "home":
        default:
            // code for home page
            window._currentPage = new HomePage()
            break;
    }


})();


