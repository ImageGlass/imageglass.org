
import {FluentRevealEffect} from "fluent-reveal-effect"


function applyRevealEffect() {
    FluentRevealEffect.applyEffect("#header .eff-reveal", {
        clickEffect: true,
        lightColor: "rgba(255,255,255, 0.1)",
        gradientSize: 100
    })
}

export default class HeaderModule {

    static initModule() {
        applyRevealEffect()
    }

}
