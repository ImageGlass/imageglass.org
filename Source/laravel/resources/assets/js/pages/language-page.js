import {FluentRevealEffect} from "fluent-reveal-effect"
import CrowdinAPI from "../helpers/crowndin-api"
import axios from "axios"



function applyRevealEffect() {
    FluentRevealEffect.applyEffect("#body", {
		clickEffect: true,
		lightColor: "rgba(255,255,255, 0.3)",
		gradientSize: 150,
		isContainer: true,
		children: {
			borderSelector: ".eff-reveal-border",
			elementSelector: ".eff-reveal",
			lightColor: "rgba(255,255,255, 0.12)",
			gradientSize: 300
		}
	})
}


export default class LanguagePage {
    constructor() {
        applyRevealEffect()

        this.loadLanguages()
    }

    async loadLanguages() {
        const PROJECT_NAME = "imageglass"
        const SECRET_KEY = "0b08634573c456476345efa8bad174f2"
        // debugger
        // let crowndin = new CrowdinAPI(PROJECT_NAME, SECRET_KEY)
        // const langs = await crowndin.getTranslationStatus()
        // window.axios = axios
        const resp = await axios.get("https://api.crowdin.com/api/project/imageglass/status?key=0b08634573c456476345efa8bad174f2&json", {
            crossdomain: true
        })
        console.log(resp)
    }
}
