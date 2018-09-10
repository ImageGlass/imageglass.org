
import "../sass/main.scss"

import HomePage from "./pages/home-page"
import NewsPage from "./pages/news-page"
import NewsDetailsPage from "./pages/news-details-page"


;(async () => {

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


        case "home":
        default:
            // code for home page
            window._currentPage = new HomePage()
            break;
    }


})();


