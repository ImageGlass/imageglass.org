
export default class GridGalleryModule {

    constructor(selector = ".grid-gallery") {
        this.selector = selector
        this.currentIndex = 0
        this.animationDuration = 500
        this.galleryItems = []

        this.galleryGrid = document.querySelector(this.selector)
        if (!this.galleryGrid) {
            throw new Error(`Cannot find element: "${this.selector}"`)
        }
        this.galleryItems = this.galleryGrid.querySelectorAll(".gallery-item")


        this.initViewer = this.initViewer.bind(this)
        this.openContent = this.openContent.bind(this)
        this.handleGalleryItemClick = this.handleGalleryItemClick.bind(this)
        this.handleCloseButtonClick = this.handleCloseButtonClick.bind(this)
        this.handleNextButtonClick = this.handleNextButtonClick.bind(this)
        this.handleBackButtonClick = this.handleBackButtonClick.bind(this)
        this.handleKeyUp = this.handleKeyUp.bind(this)
    }

    /**
     * Start Grid Gallery viewer
     */
    initViewer() {
        this.galleryItems.forEach((item, index) => {
            item.setAttribute("data-index", index)
            item.addEventListener("click", this.handleGalleryItemClick, false)
        })
    }


    /**
     * Show the content
     */
    openContent(step = 0) {

        const self = this
        let viewer = document.querySelector(".grid-gallery-viewer")
        let newIndex = self.currentIndex + step


        // view next
        if (step > 0) {
            if (newIndex > self.galleryItems.length - 1) {
                newIndex = 0
            }

            // animation: hide old content
            viewer.classList.add("closeViewer_Next")
        }
        // view back
        else if (step < 0) {
            if (newIndex < 0) {
                newIndex = self.galleryItems.length - 1
            }

            // animation: hide old content
            viewer.classList.add("closeViewer_Back")
        }
        // no change, refresh
        else {
            // animation: hide old content
            viewer.classList.add("closeViewer")
        }

        // update new index
        self.currentIndex = newIndex

        // new content
        const content = self.galleryItems[self.currentIndex].cloneNode(true).innerHTML

        setTimeout(() => {
            viewer.classList.remove("closeViewer", "closeViewer_Next", "closeViewer_Back")

            // view next
            if (step > 0) {
                // animation: hide old content
                viewer.classList.add("openViewer_Next")
            }
            // view back
            else if (step < 0) {
                // animation: hide old content
                viewer.classList.add("openViewer_Back")
            }
            // no change, refresh
            else {
                // animation: hide old content
                viewer.classList.add("openViewer")
            }


            let viewerBody = viewer.querySelector(".viewer-body")
            viewerBody.innerHTML = content

            setTimeout(() => {
                viewer.classList.remove("openViewer", "openViewer_Next", "openViewer_Back")
                
            }, self.animationDuration)
            
        }, self.animationDuration)
    }


    /**
     * Event: gallery item click
     * @param {Event} e 
     */
    handleGalleryItemClick(e) {
        // console.log(e.currentTarget)
        this.currentIndex = parseInt(e.currentTarget.getAttribute("data-index"))
        // console.log(this.currentIndex)

        // back button
        let navBack = document.createElement("span")
        navBack.classList.add("viewer-nav-back")
        navBack.title = "Previous"
        navBack.addEventListener("click", this.handleBackButtonClick, false)

        // next button
        let navNext = document.createElement("span")
        navNext.classList.add("viewer-nav-next")
        navNext.title = "Next"
        navNext.addEventListener("click", this.handleNextButtonClick, false)

        // close button
        let btnclose = document.createElement("span")
        btnclose.classList.add("viewer-close")
        btnclose.title = "Close"
        btnclose.addEventListener("click", this.handleCloseButtonClick, false)

        // viewer body
        let viewerBody = document.createElement("div")
        viewerBody.classList.add("viewer-body")

        // gallery viewer
        let viewer = document.createElement("div")
        viewer.classList.add("grid-gallery-viewer")
        viewer.append(navBack)
        viewer.append(viewerBody)
        viewer.append(navNext)
        viewer.append(btnclose)
        

        document.body.classList.add("grid-gallery-viewer-open")
        document.body.append(viewer)
        document.addEventListener("keyup", this.handleKeyUp, false)

        // open content
        this.openContent()
    }


    /**
     * Event: Close button click
     */
    handleCloseButtonClick() {
        document.body.classList.remove("grid-gallery-viewer-open")
        document.removeEventListener("keyup", this.handleKeyUp, false)

        const viewer = document.querySelector(".grid-gallery-viewer")
        if (viewer) {
            viewer.classList.add("closing")
            
            setTimeout(() => {
                viewer.remove()
            }, this.animationDuration)
        }
    }


    /**
     * Event: Next button click
     * @param {Event} e 
     */
    handleNextButtonClick(e) {

        // open content
        this.openContent(1)
    }


    /**
     * Event: Back button click
     * @param {Event} e 
     */
    handleBackButtonClick(e) {

        // open content
        this.openContent(-1)
    }

    
    /**
     * Event key up
     * @param {Event} e 
     */
    handleKeyUp(e) {
        // console.log(e.keyCode)
        
        if (!e.ctrlKey && !e.shiftKey && !e.altKey && !e.metaKey) {

            // NEXT key
            if (e.keyCode == 39) {
                this.openContent(1)
            }
            // BACK key
            else if (e.keyCode == 37) {
                this.openContent(-1)
            }
            // ESC key
            else if (e.keyCode == 27) {
                this.handleCloseButtonClick()
            }
        }

    }

}
