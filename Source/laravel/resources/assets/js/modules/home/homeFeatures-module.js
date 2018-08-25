
import {FluentRevealEffect} from "fluent-reveal-effect"



function applyRevealEffect() {
    FluentRevealEffect.applyEffect(".home-features", {
		clickEffect: false,
		lightColor: "rgba(255,255,255, 0.2)",
		gradientSize: 170,
		isContainer: true,
		children: {
			borderSelector: ".eff-reveal-border",
			elementSelector: ".eff-reveal___",
			lightColor: "rgba(255,255,255, 0.05)",
			gradientSize: 500
		}
	})
}


export default class HomeFeaturesModule {

    static initModule() {
        applyRevealEffect()
    }

}
