import HeaderModule from "../modules/header-module"
import HomeTopModule from "../modules/home/homeTop-module"
import HomeFeaturesModule from "../modules/home/homeFeatures-module"
import HomeReviewModule from "../modules/home/homeReview-module"


export default class HomePage {
    constructor() {
        // console.log("HomePage")

        HeaderModule.initModule()
        HomeTopModule.initModule()
        HomeFeaturesModule.initModule()
        HomeReviewModule.initModule()

    }
}

