import {FluentRevealEffect} from "fluent-reveal-effect"
import ArticleListModule from "../modules/aside/article-list-module"
import GridGalleryModule from "../modules/grid-gallery-module"


export default class ThemeDetailsPage {
    constructor() {
        
        this.applyRevealEffectToHighlightSection()
        ArticleListModule.initModule()

        // grid gallery viewer
        const gallery = new GridGalleryModule("#screenshots .grid-gallery")
        gallery.initViewer()
    }


    applyRevealEffectToHighlightSection() {
        FluentRevealEffect.applyEffect(".theme-highlight > .bg-box-content", {
            clickEffect: true,
            lightColor: "rgba(255,255,255, 0.7)",
            gradientSize: 120,
            isContainer: true,
            children: {
                borderSelector: ".eff-reveal-border",
                elementSelector: ".eff-reveal",
                lightColor: "rgba(255,255,255, 0.15)",
                gradientSize: 200
            }
        })
    }
}
