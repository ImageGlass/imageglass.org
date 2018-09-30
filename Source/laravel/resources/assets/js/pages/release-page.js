import {FluentRevealEffect} from "fluent-reveal-effect"


function applyRevealEffect() {
    FluentRevealEffect.applyEffect("#body", {
		clickEffect: false,
		lightColor: "rgba(255,255,255, 0.3)",
		gradientSize: 200,
		isContainer: true,
		children: {
			borderSelector: ".eff-reveal-border",
			elementSelector: ".eff-reveal",
			lightColor: "rgba(255,255,255, 0)",
			gradientSize: 1
		}
	})
}


export default class ReleasePage {
    constructor() {
        applyRevealEffect()
    }
}
