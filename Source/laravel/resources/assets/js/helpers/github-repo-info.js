
export default class GithubRepoInfo {
    constructor(repo) {
        this.repo = repo
        this.getRepoInfo = this.getRepoInfo.bind(this)
    }

    /**
     * Get Repository information
     */
    async getRepoInfo() {
        try {
            const resp = await (await fetch(`https://api.github.com/repos/${this.repo}`)).json()
            return resp
        }
        catch (error) {
            console.log("***ERROR: ", error)
        }

        return null
    }
}


