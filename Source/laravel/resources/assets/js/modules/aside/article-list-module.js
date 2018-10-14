import {FluentRevealEffect} from "fluent-reveal-effect"


function applyRevealEffect() {
    FluentRevealEffect.applyEffect("#body > .container", {
		clickEffect: true,
		lightColor: "rgba(255,255,255, 0.3)",
		gradientSize: 100,
		isContainer: true,
		children: {
			borderSelector: ".eff-reveal-border",
			elementSelector: ".eff-reveal",
			lightColor: "rgba(255,255,255, 0.15)",
			gradientSize: 200
		}
	})
}


export default class ArticleListModule {
    static initModule() {
        applyRevealEffect()
    }
}
