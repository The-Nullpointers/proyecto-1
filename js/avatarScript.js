//Cambiar Accesorios -- Cabello --------------------------------------------------------------
function changeHairImage() {
    var hairStyle = document.getElementById("hairStyle").value;
    var hairImage = document.getElementById("hairImage");

    if (hairStyle == "Ninguno") {
        hairImage.setAttribute("src", "../images/vacia.png");
    }else if(hairStyle == "Cabello Blanco Corto"){
        hairImage.setAttribute("src", "../images/cabello/hombre/pelo-blanco.png");
    }else if(hairStyle == "Cabello Hippie Largo"){
        hairImage.setAttribute("src", "../images/cabello/hombre/hippie.png");
    }else if(hairStyle == "Cabello Beige Corto"){
        hairImage.setAttribute("src", "../images/cabello/hombre/pelo-beige.png");
    }else if(hairStyle == "Cabello Rubio Corto"){
        hairImage.setAttribute("src", "../images/cabello/hombre/rubio.png");
    }else if(hairStyle == "Cabello Rojo Largo"){
        hairImage.setAttribute("src", "../images/cabello/mujer/pelo-rojo.png");
    }else if(hairStyle == "Cabello Rosa Corto"){
        hairImage.setAttribute("src", "../images/cabello/mujer/pelo-rosa.png");
    }else if(hairStyle == "Cabello Trenzas Corto"){
        hairImage.setAttribute("src", "../images/cabello/mujer/trenzas.png");
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
    else if(clothesStyle == "Abrigo Grueso"){
        clothesImage.setAttribute("src", "../images/cuerpo/ambos/abrigo-grueso.png");
    }
    else if(clothesStyle == "Disfraz de colores"){
        clothesImage.setAttribute("src", "../images/cuerpo/ambos/disfraz-colores.png");
    }
    else if(clothesStyle == "Mommia"){
        clothesImage.setAttribute("src", "../images/cuerpo/ambos/EL-REAL.png");
    }
    else if(clothesStyle == "Oveja"){
        clothesImage.setAttribute("src", "../images/cuerpo/ambos/oveja.png");
    }
    else if(clothesStyle == "Traje de Bufon"){
        clothesImage.setAttribute("src", "../images/cuerpo/ambos/traje-bufon.png");
    }
    else if(clothesStyle == "Traje de Ninja Agua"){
        clothesImage.setAttribute("src", "../images/cuerpo/ambos/traje-ninja-agua.png");
    }
    else if(clothesStyle == "Camiseta de Musica"){
        clothesImage.setAttribute("src", "../images/cuerpo/hombre/camiseta-musica.png");
    }
    else if(clothesStyle == "Camiseta Verde"){
        clothesImage.setAttribute("src", "../images/cuerpo/hombre/camiseta-verde.png");
    }
    else if(clothesStyle == "Traje"){
        clothesImage.setAttribute("src", "../images/cuerpo/hombre/traje.png");
    }
    else if(clothesStyle == "Atuendo de Animadora"){
        clothesImage.setAttribute("src", "../images/cuerpo/mujer/atuendo-animadora.png");
    }
    else if(clothesStyle == "Blusa Rosada"){
        clothesImage.setAttribute("src", "../images/cuerpo/mujer/blusa-rosa.png");
    }
    else if(clothesStyle == "Vestido de Animadora"){
        clothesImage.setAttribute("src", "../images/cuerpo/mujer/vestido-animadora.png");
    }
    else if(clothesStyle == "Vestido Negro"){
        clothesImage.setAttribute("src", "../images/cuerpo/mujer/vestido-negro.png");
    }
    else if(clothesStyle == "Vestido Rosa"){
        clothesImage.setAttribute("src", "../images/cuerpo/mujer/vestido-rosa.png");
    }

}
const selectElementclothesStyle = document.getElementById('clothesStyle');
    selectElementclothesStyle.addEventListener('change', function () {
    changeClothesImage();
});

function changeAccessoriesImage() {
    var accessoriesStyle = document.getElementById("accessoriesStyle").value;
    var accessoriesImage = document.getElementById("accessoriesImage");

    if (accessoriesStyle == "Ninguno") {
        accessoriesImage.setAttribute("src", "../images/vacia.png");
    }else if(accessoriesStyle == "Bandana"){
        accessoriesImage.setAttribute("src", "../images/sombreros/bandana.png");
    }else if(accessoriesStyle == "Casco Ninja de Fuego"){
        accessoriesImage.setAttribute("src", "../images/sombreros/casco-ninja-fuego.png");
    }else if(accessoriesStyle == "Casco Ninja de hielo"){
        accessoriesImage.setAttribute("src", "../images/sombreros/casco-ninja-hielo.png");
    }else if(accessoriesStyle == "Casco"){
        accessoriesImage.setAttribute("src", "../images/sombreros/casco.png");
    }else if(accessoriesStyle == "Gorro Ninja de Agua"){
        accessoriesImage.setAttribute("src", "../images/sombreros/gorro-ninja-agua.png");
    }else if(accessoriesStyle == "Gorro Ninja de Hielo"){
        accessoriesImage.setAttribute("src", "../images/sombreros/gorro-ninja-hielo.png");
    }else if(accessoriesStyle == "Gorro Ninja de Nieve"){
        accessoriesImage.setAttribute("src", "../images/gorro-para-nieve.png");
    }else if(accessoriesStyle == "Plumas"){
        accessoriesImage.setAttribute("src", "../images/sombreros/plumas.png");
    }
}
const selectElementaccessoriesStyle = document.getElementById('accessoriesStyle');
    selectElementaccessoriesStyle.addEventListener('change', function () {
        changeAccessoriesImage();
});