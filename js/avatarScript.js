//Cambiar Accesorios -- Cabello --------------------------------------------------------------
function changeHairImage() {
    var hairStyle = document.getElementById("hairStyle").value;
    var hairImage = document.getElementById("hairImage");

    if (hairStyle == "Ninguno") {
        hairImage.setAttribute("src", "../images/vacia.png");
    }else if(hairStyle == "Cabello Blanco Corto"){
        hairImage.setAttribute("src", "../images/cabello/hombre/pelo-blanco.png");
    }else if(hairStyle == "Cabello Hippie Corto"){
        hairImage.setAttribute("src", "../images/cabello/hombre/hippie.png");
    }else if(hairStyle == "Cabello Beige Corto"){
        hairImage.setAttribute("src", "../images/cabello/hombre/pelo-beige.png");
    }else if(hairStyle == "Cabello Rubio Corto"){
        hairImage.setAttribute("src", "../images/cabello/hombre/rubio.png");
    }else if(hairStyle == ""){
        hairImage.setAttribute("src", "../images/cabello/hombre/pelo-blanco.png");
    }else if(hairStyle == ""){
        hairImage.setAttribute("src", "../images/cabello/hombre/pelo-blanco.png");
    }
    
}
const selectElementhairStyle = document.getElementById('hairStyle');
    selectElementhairStyle.addEventListener('change', function () {
    changeHairImage();
});

//Cambiar Color al pinguino------------------------------------------------------------------
function changeSkinImage() {
    var skinStyle = document.getElementById("skinStyle").value;
    var skinImage = document.getElementById("skinImage");

    if (skinStyle == "Ninguno") {
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-blanco.png");
    }else if(skinStyle == "Amarillo"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-amarillo.png");
    }else if(skinStyle == "Anaranjado"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-anaranjado.png");
    }else if(skinStyle == "Azul"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-azul.png");
    }else if(skinStyle == "Cafe"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-cafe-claro.png");
    }else if(skinStyle == "Celeste Brillante"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-celeste-brillante.png");
    }else if(skinStyle == "Fucsia"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-fucsia.png");
    }else if(skinStyle == "Gris"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-gris.png");
    }else if(skinStyle == "Morado"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-morado.png");
    }else if(skinStyle == "Negro"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-negro.png");
    }else if(skinStyle == "Purpura"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-purpura.png");
    }else if(skinStyle == "Rojo"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-rojo.png");
    }else if(skinStyle == "Rojo Vino"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-rojo-vino.png");
    }else if(skinStyle == "Rosa"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-rosado.png");
    }else if(skinStyle == "Verde Fosforesente"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-verde.fosforesente.png");
    }else if(skinStyle == "Verde"){
        skinImage.setAttribute("src", "../images/color pinguinos/punguino-verde.png");
    }
    
}
const selectElementskinStyle = document.getElementById('skinStyle');
    selectElementskinStyle.addEventListener('change', function () {
    changeSkinImage();
});

//Cambiar Torso------------------------------------------------------------------------------
function changeClothesImage() {
    var clothesStyle = document.getElementById("clothesStyle").value;
    var clothesImage = document.getElementById("clothesImage");

    if (clothesStyle == "Ninguno") {
        clothesImage.setAttribute("src", "../images/vacia.png");
    }else if(clothesStyle == "Pescado"){
        clothesImage.setAttribute("src", "../images/cuerpo/ambos/pescado.png");
    }else if(clothesStyle == "Abrigo"){
        clothesImage.setAttribute("src", "../images/cuerpo/ambos/abrigo.png");
    }
}
const selectElementclothesStyle = document.getElementById('clothesStyle');
    selectElementclothesStyle.addEventListener('change', function () {
    changeClothesImage();
});

