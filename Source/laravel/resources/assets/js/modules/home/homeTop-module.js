
import {FluentRevealEffect} from "fluent-reveal-effect"



function applyRevealEffect() {
    FluentRevealEffect.applyEffect(".home-top > .bg-box-content", {
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


export default class HomeTopModule {

    static initModule() {
        applyRevealEffect()
    }

}
