function Translate() {
    // Initialization function for Translate object
    this.init =  function(attribute, lng){
        // Set the values of the input arguments as properties of the object
        this.attribute = attribute;
        this.lng = lng;
    }
    // Translate function for Translate object
    this.process = function(){
        // Store reference to Translate object as _self
        _self = this;
        // Create new XMLHttpRequest object
        let xhrFile = new XMLHttpRequest();
        // Open a GET request for the specified JSON file
        xhrFile.open("GET", "/lng/"+this.lng+".json", false);
        // Add event listener for when the request is complete
        xhrFile.onreadystatechange = function () {
            // Check if the request is complete (readyState === 4)
            if(xhrFile.readyState === 4) {
                // Check if the request was successful (status === 200)
                if(xhrFile.status === 200 || xhrFile.status == 0) {
                    // If successful, parse the response as JSON and store as LngObject
                    let LngObject = JSON.parse(xhrFile.responseText);
                    // Get all elements in the HTML document
                    let allDom = document.getElementsByTagName("*");
                    // Iterate over all elements
                    for(let i =0; i < allDom.length; i++){
                        let elem = allDom[i];
                        // Get the value of the attribute specified by this.attribute
                        let key = elem.getAttribute(_self.attribute);
                        // If the attribute is not null, set the inner HTML of the element
                        // to the value in LngObject corresponding to the attribute value
                        if(key != null) {
                            elem.innerHTML = LngObject[key];
                        }
                    }
                }
            }
        }
        // Send the request
        xhrFile.send();
    }
}
