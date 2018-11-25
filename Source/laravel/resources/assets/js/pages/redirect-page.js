
export default class RedirectPage {
    constructor() {
        this.init()
        
    }

    init() {
        fillDots()
        
        function fillDots() {
            setTimeout(() => {
                let loader = document.getElementById("loader")
                const charCount = loader.innerText.length

                if (charCount === 3) {
                    loader.innerText = ""
                }
                else {
                    loader.innerText = loader.innerText.padRight(Math.min(charCount + 1, 3), ".")
                }

                
                fillDots()
    
            }, 500);
        }

        // start downloading file after 3s
        setTimeout(() => {
            download()
        }, 3000);

        function download() {
            let url = document.getElementById("directUrl")
            url.click()
        }


        // auto go back home page after 15s
        setTimeout(() => {
            window.location = "/"
        }, 15000);
    }


    
}
