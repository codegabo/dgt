//
var img = document.getElementById('live-preview-current-variant'),
    more = document.getElementById('button-more'),
    less = document.getElementById('button-less'),
    previewcontainer = document.getElementById('live-preview'),
    element = document.createElement("DIV"),
    textSize = document.createTextNode("Size");
// function actualSize() {
//     console.log("Tamaño actual en Pixeles: " + img.offsetHeight);
// }
// actualSize();



more.addEventListener('click', () => {
    document.getElementById('live-preview-current-variant').style.height = document.getElementById('live-preview-current-variant').offsetHeight + document.getElementById('live-preview-current-variant').offsetHeight * 2 / 100 + 'px';
    document.getElementById('live-preview-current-variant').style.width = document.getElementById('live-preview-current-variant').offsetWidth + document.getElementById('live-preview-current-variant').offsetWidth * 2 / 100 + 'px';
    console.log('Alto ↑ ' + document.getElementById('live-preview-current-variant').offsetHeight);
    console.log('Ancho ↑' + document.getElementById('live-preview-current-variant').offsetWidth);
    // previewcontainer.appendChild(element);
    // document.getElementsByClassName("textSize").innerHTML = "Aumentado a " + img.style.height;
    if(document.getElementById('live-preview-current-variant').offsetHeight >= 600){
        // more.classList.remove("zoom-button");
        // document.getElementById("text").innerHTML = "sobrepasaste el limite de 1000px (actualmente "+img.style.height+")";
        more.classList.add("block-zoom-button");
        more.disabled = true;
        less.addEventListener('click', () => {
            more.classList.add("zoom-button");
            more.classList.remove("block-zoom-button");
            more.disabled = false;
        })
    }
});
less.addEventListener('click', () => {
    document.getElementById('live-preview-current-variant').style.height = document.getElementById('live-preview-current-variant').offsetHeight - document.getElementById('live-preview-current-variant').offsetHeight * 2 / 100 + 'px';
    document.getElementById('live-preview-current-variant').style.width = document.getElementById('live-preview-current-variant').offsetWidth - document.getElementById('live-preview-current-variant').offsetWidth * 2 / 100 + 'px';
    console.log('Alto ↓ ' + document.getElementById('live-preview-current-variant').offsetHeight);
    console.log('Ancho ↓ ' + document.getElementById('live-preview-current-variant').offsetWidth);
    // document.getElementById("text").innerHTML = "Disminuido a " + img.style.height;
    if(document.getElementById('live-preview-current-variant').offsetHeight <= 350){
        less.classList.remove("zoom-button");
        // document.getElementById("text").innerHTML = "Llegaste al minimo de 567px (actualmente " + img.style.height + ")";
        less.classList.add("block-zoom-button");
        less.disabled = true;
        more.addEventListener('click', () => {
            less.classList.add("zoom-button");
            less.classList.remove("block-zoom-button");
            less.disabled = false;
        })
    }
});



//
// let previewClothes = document.getElementsByClassName("container-right-img")[0];
// previewClothes.addEventListener("click", () => {
//     document.body.getElementsByClassName('live-preview').appendChild(element);
// });








function elemento(e){
    if (e.srcElement) {
        tag = e.srcElement;
    }
    else if (e.target) {
        tag = e.target;
    }
    if(tag.tagName == "IMG" && tag.className == "container-right-img"){
        //*****************************************************
        // alert("El elemento selecionado ha sido " + tag);
        //*****************************************************
        // document.getElementById("live-preview").innerHTML = '' +
        //     '<img src="' + e.target.src + '" alt=""  class="live-preview-current" id="live-preview-current">' +
        //     '<button class="button-dropdown-clothes icon-clothes" id="button-dropdown-clothes"></button>' +
        //     '<div class="zoomButtons-container">' +
        //     '   <button class="button-more icon-plus" id="button-more"></button>' +
        //     '   <button class="button-less icon-minus" id="button-less"></button>' +
        //     '</div>';
    }
    else if(tag.tagName == "IMG" && tag.className == "variants-img"){
        let variantContainer = document.getElementById("variants-container"),
            currentModel = document.getElementById("live-preview-current"),
            imgVariantContainer = document.createElement("img"),
        firstChildContainer = variantContainer.firstChild;
                                        // console.log(currentModel.src);
        imgVariantContainer.src = tag.src;
        imgVariantContainer.className = "live-preview-current-variant";
        imgVariantContainer.id = "live-preview-current-variant";

        if(variantContainer.hasChildNodes()) {

            variantContainer.removeChild(variantContainer.childNodes[0]);
                // variantContainer.appendChild(imgVariantContainer[0]);
            variantContainer.prepend(imgVariantContainer);
            if(variantContainer.childNodes[3]){
                variantContainer.removeChild(variantContainer.childNodes[0]);
            }
            var img = document.getElementById('live-preview-current-variant');
                }
    }

}
console.log('Alto ' + img.offsetHeight);
console.log('Ancho ' + img.offsetWidth);

























//
//
//
//
//
// function elemento(e){
//     if (e.srcElement.tagName === 'container-right-img') {
//         // tag = e.srcElement.tagName;
//         document.getElementById("live-preview").innerHTML = '' +
//             '<img src="' + e.srcElement.src + '" alt=""  class="live-preview-current" id="live-preview-current">' +
//             '<button class="button-dropdown-clothes icon-clothes" id="button-dropdown-clothes"></button>\n' +
//             '            <div class="zoomButtons-container">\n' +
//             '               <button class="button-more icon-plus" id="button-more"></button>\n' +
//             '               <button class="button-less icon-minus" id="button-less"></button>\n' +
//             '            </div>';
//     }
//     else if (e.target.tagName === 'container-right-img') {
//         // tag = e.target.tagName;
//         document.getElementById("live-preview").innerHTML = '' +
//             '<img src="' + e.target.src + '" alt=""  class="live-preview-current" id="live-preview-current">' +
//             '<button class="button-dropdown-clothes icon-clothes" id="button-dropdown-clothes"></button>\n' +
//             '            <div class="zoomButtons-container">\n' +
//             '               <button class="button-more icon-plus" id="button-more"></button>\n' +
//             '               <button class="button-less icon-minus" id="button-less"></button>\n' +
//             '            </div>';
//     }
//     // alert("El elemento selecionado ha sido " + tag);
// }