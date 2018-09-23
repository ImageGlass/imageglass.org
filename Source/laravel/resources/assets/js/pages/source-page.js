import ArticleListModule from "../modules/aside/article-list-module"
import GithubRepoInfo from "../helpers/github-repo-info"


export default class SourcePage {
    constructor() {
        ArticleListModule.initModule()

        // load repository info
        this.loadGithubInfo()
    }

    /**
     * load repository info
     */
    async loadGithubInfo() {
        let repo = new GithubRepoInfo("d2phap/ImageGlass")
        const resp = await repo.getRepoInfo()

        let repoStars = document.getElementById("repoStars")
        repoStars.innerHTML = `${resp.watchers_count}⭐`

        let repoFolks = document.getElementById("repoFolks")
        repoFolks.innerHTML = resp.forks_count
        
        let repoLicense = document.getElementById("repoLicense")
        repoLicense.innerHTML = resp.license.name
    }
}
