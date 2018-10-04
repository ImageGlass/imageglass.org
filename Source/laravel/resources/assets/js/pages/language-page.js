import {FluentRevealEffect} from "fluent-reveal-effect"
import $ from "jquery"

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
        var self = this

        $(".language-item-content").off().click(function(e) {
            e.preventDefault()

            // get lang code
            let langCode = $(this).attr("data-code")

            // start downloading
            self.downloadLanguage(langCode)
        })
    }

    async downloadLanguage(langCode) {
        try {
            
            // download the language pack from Crowndin to server
            const downloadFile = await (await fetch(`language/${langCode}/download`)).text()

            // create a dummy hyperlink to download
            var a = document.createElement("a")
            a.href = downloadFile
            a.style.display = "none"
            a.download = `${langCode}.zip`
            document.body.appendChild(a)

            // start downloading
            a.click()

            // remove dummy hyperlink
            document.body.removeChild(a)

        } catch (error) {
            console.log(error)
            alert(error)
        }
    }
}
