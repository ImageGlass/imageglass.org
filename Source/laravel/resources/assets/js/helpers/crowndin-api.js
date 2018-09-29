import RequestHelper from "./request-helper"

export default class CrowdinAPI {

    /**
     * Initialize new CrowdinAPI instance 
     * @param {String} project 
     * @param {String} key 
     */
    constructor(project, key) {
        this.project = project
        this.key = key
    }

    /**
     * Get Repository information
     */
    async getTranslationStatus() {
        
        let request = RequestHelper.getRequestHeader(`https://api.crowdin.com/api/project/${this.project}/status`, "GET", `key=${this.key}&json`);

        try {
            const resp = await (await fetch(request).json())
            return resp
        }
        catch (error) {
            console.log("***ERROR: ", error)
        }

        return null
    }
}


