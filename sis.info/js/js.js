//
let img = document.getElementById('live-preview-current'),
    more = document.getElementById('button-more'),
    less = document.getElementById('button-less'),
    previewcontainer = document.getElementById('live-preview'),
    element = document.createElement("DIV"),
    textSize = document.createTextNode("Size");
// function actualSize() {
//     previewcontainer.innerHTML = "Tamaño actual en Pixeles: " + img.offsetHeight;
// }
// actualSize();
// more.addEventListener('click', () => {
//     img.style.height = img.offsetHeight + img.offsetHeight * 2 / 100 + 'px';
//     img.style.width = img.offsetWidth + img.offsetWidth * 2 / 100 + 'px';
//     console.log('Alto ↑ ' + img.offsetHeight);
//     console.log('Ancho ↑' + img.offsetWidth);
//     previewcontainer.appendChild(element);
//     document.getElementsByClassName("textSize").innerHTML = "Aumentado a " + img.style.height;
//     if(img.offsetHeight >= 1000){
//         more.classList.remove("zoom-button");
//         document.getElementById("text").innerHTML = "sobrepasaste el limite de 1000px (actualmente "+img.style.height+")";
//         more.classList.add("block-zoom-button");
//         more.disabled = true;
//         less.addEventListener('click', () => {
//             more.classList.add("zoom-button");
//             more.classList.remove("block-zoom-button");
//             more.disabled = false;
//         })
//     }
// });
// less.addEventListener('click', () => {
//     img.style.height = img.offsetHeight - img.offsetHeight * 2 / 100 + 'px';
//     img.style.width = img.offsetWidth - img.offsetWidth * 2 / 100 + 'px';
//     console.log('Alto ↓ ' + img.offsetHeight);
//     console.log('Ancho ↓ ' + img.offsetWidth);
//     document.getElementById("text").innerHTML = "Disminuido a " + img.style.height;
//     if(img.offsetHeight <= 567){
//         less.classList.remove("zoom-button");
//         document.getElementById("text").innerHTML = "Llegaste al minimo de 567px (actualmente " + img.style.height + ")";
//         less.classList.add("block-zoom-button");
//         less.disabled = true;
//         more.addEventListener('click', () => {
//             less.classList.add("zoom-button");
//             less.classList.remove("block-zoom-button");
//             less.disabled = false;
//         })
//     }
// });

// let previewClothes = document.getElementsByClassName("all-clothes-item")[0];
// previewClothes.addEventListener("click", () => {
//     document.body.getElementsByClassName('preview').appendChild(element);
// });

//
// Creamos un array vacio
var ElementosClick = new Array();
// Capturamos el click y lo pasamos a una funcion
document.onclick = captura_click;

function captura_click(e) {
    // Funcion para capturar el click del raton
    var HaHechoClick;
    if (e === null ) {
        // Si hac click un elemento, lo leemos
        HaHechoClick = event.srcElement;
    } else {
        // Si ha hecho click sobre un destino, lo leemos
        console.log("clic en destino");
        HaHechoClick = e.target;
    }
    // Añadimos el elemento al array de elementos
    ElementosClick.push(HaHechoClick);
    // Una prueba con salida en consola
    console.log('clase -> ' + HaHechoClick.className);
    console.log('ID item -> ' + HaHechoClick.id);
    if (document.getElementById('container-right-img')) {
        // console.log('item  condicional works-> <img src="img/clothes_png/LEGINS.png" alt="" class="all-clothes-item" id="' + HaHechoClick.id + '">');
        previewcontainer.innerHTML = '<img src="' + HaHechoClick.src + '" alt="" class="live-preview-current" id="live-preview-current"' + HaHechoClick.id + '">' +
            '<button class="button-dropdown-clothes icon-clothes" id="button-dropdown-clothes" ></button>\n' +
            '            <div class="zoomButtons-container">\n' +
            '               <button class="button-more icon-plus" id="button-more"></button>\n' +
            '               <button class="button-less icon-minus" id="button-less"></button>\n' +
            '            </div>';

        // innerHTML = '<img src="' + HaHechoClick.src + '" alt="" class="live-preview-current" id="live-preview-current"' + HaHechoClick.id + '">';
        // document.addEventListener("click", function(event){
        //     if (event.target.className === "all-clothes-item") console.log(event.target.src);
        // }, false);

    } else{
        con
    }
}

    // document.addEventListener("click", function(event){
    //     if (event.target.className === "all-clothes-item")
    //         console.log(event.target.src);
    //         console.log(event.target.id);
    //         document.getElementById("preview").innerHTML = '' +
    //             '<img src="img/clothes_designs/DIBUJO%20CO-0001/CO-0001PRENDA.jpg" alt="" id="design" class="design"> ' +
    //             '<img src="' + event.target.src + '" alt="" class="clothes" id="' +
    //             event.target.id + '">';
    //
    // }, false);
// }
// console.log(previewClothes);
console.log('Alto ' + img.offsetHeight);
console.log('Ancho ' + img.offsetWidth);
//
//
