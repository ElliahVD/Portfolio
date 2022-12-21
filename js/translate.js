function Translate() {
    //initialization
    this.init =  function(attribute, lng){
        this.attribute = attribute;
        this.lng = lng;
    }
    //translate
    this.process = function(){
        _self = this;
        let xrhFile = new XMLHttpRequest();
        //load content data
        xrhFile.open("GET", "lng/"+this.lng+".json", false);
        xrhFile.onreadystatechange = function ()
        {
            if(xrhFile.readyState === 4)
            {
                if(xrhFile.status === 200 || xrhFile.status == 0)
                {
                    let LngObject = JSON.parse(xrhFile.responseText);
                    let allDom = document.getElementsByTagName("*");
                    for(let i =0; i < allDom.length; i++){
                        let elem = allDom[i];
                        let key = elem.getAttribute(_self.attribute);
                        if(key != null) {
                            elem.innerHTML = LngObject[key]  ;
                        }
                    }

                }
            }
        }
        xrhFile.send();
    }
}

