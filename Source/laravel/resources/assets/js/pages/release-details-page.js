import {FluentRevealEffect} from "fluent-reveal-effect"
import ArticleListModule from "../modules/aside/article-list-module"


export default class ReleaseDetailsPage {
    constructor() {
        ArticleListModule.initModule()
        this.applyRevealEffectToHighlightSection()
    }


    applyRevealEffectToHighlightSection() {
        FluentRevealEffect.applyEffect(".release-highlight > .bg-box-content", {
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
