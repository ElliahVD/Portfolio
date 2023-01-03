//This function will be called when user click changing language
function translate(lng, tagAttr) {
    var translate = new Translate();
    translate.init(tagAttr, lng);
    translate.process();
    if (lng == 'en') {
        document.getElementById('enTranslator').style.color = '#ffae00';
        document.getElementById('frTranslator').style.color = '#ffffff';
    }
    if (lng == 'fr') {
        //dans ma page (document) je cherche l'ID translator
        document.getElementById('frTranslator').style.color = '#ffae00';
        document.getElementById('enTranslator').style.color = '#ffffff';
    }
}
    //faire un window par precaution pour avoir tout le chargement de la page contrairement au document
    window.addEventListener('load', () => {
    //This is id of HTML element (English) with attribute lng-tag
    document.getElementById('enTranslator').addEventListener('click', () => {
        translate('en', 'lng-tag');
    });

    //This is id of HTML element (french) with attribute lng-tag
    document.getElementById('frTranslator').addEventListener('click', () => {
        translate('fr', 'lng-tag');
    })
});

