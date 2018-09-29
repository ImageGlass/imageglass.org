export default class RequestHelper {
    constructor() {

    }

    /**
     * Build Request for fetching data from server
     * @param {String} url 
     * @param {String} method 
     * @param {String} data 
     */
    static getRequestHeader(url, method, data = null) {
        let init = {
            headers: new Headers({
                "Content-Type": "application/x-www-form-urlencoded"
            }),
            mode: "no-cors",
            method: method
        }
    
        //add parameters
        if (data != null) {
            if (method == "GET") {
                url = `${url}?${data}`
            }
            else { //a request using the GET or HEAD method cannot have a body
                init.body = data
            }
        }
    
        return new Request(url, init)
    }
}