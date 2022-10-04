//This function will be called when user click changing language
function translate(lng, tagAttr) {
    var translate = new Translate();
    translate.init(tagAttr, lng);
    translate.process();
    if (lng == 'en') {
        document.getElementById('enTranslator').style.color = '#f4623a';
        document.getElementById('frTranslator').style.color = '#212529';

    }
    if (lng == 'fr') {
        //dans ma page (document) je cherche l'ID translator
        document.getElementById('frTranslator').style.color = '#f4623a';
        document.getElementById('enTranslator').style.color = '#212529';

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
