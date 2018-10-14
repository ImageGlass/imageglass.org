import {FluentRevealEffect} from "fluent-reveal-effect"


function applyRevealEffect() {
    FluentRevealEffect.applyEffect("#body", {
		clickEffect: true,
		lightColor: "rgba(255,255,255, 0.3)",
		gradientSize: 150,
		isContainer: true,
		children: {
			borderSelector: ".eff-reveal-border",
			elementSelector: ".eff-reveal",
			lightColor: "rgba(255,255,255, 0.15)",
			gradientSize: 200
		}
	})
}


export default class LanguagePage {
    constructor() {
        applyRevealEffect()
    }
}
