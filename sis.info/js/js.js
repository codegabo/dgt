
var img = document.getElementById('live-preview-current-variant'),
    more = document.getElementById('button-more'),
    less = document.getElementById('button-less'),
    previewcontainer = document.getElementById('live-preview'),
    element = document.createElement("DIV"),
    textSize = document.createTextNode("Size");

let variantContainer = document.getElementById("variants-container"),
    imgVariantContainer = document.createElement("img"),
    currentVariantDesign = document.getElementById("live-preview-current-variant"),
    imgCurrentModel = document.createElement("img"),
    currentdesign = document.getElementById("current-design"),
    h1titleDesign = document.createElement("h1"),
    el = document.createElement("p");

function elemento(e){
    if (e.srcElement) {
        tag = e.srcElement;
    }
    else if (e.target) {
        tag = e.target;
    }
    let h1content = document.createTextNode(" " + tag.alt);

    if(tag.tagName == "IMG" && tag.className == "variants-img"){
        imgVariantContainer.src = tag.src.replace("thumb", "large");
        imgVariantContainer.className = "live-preview-current-variant";
        imgVariantContainer.id = "live-preview-current-variant";
        imgVariantContainer.alt = tag.alt;

        h1titleDesign.className = "current-design-title";
        h1titleDesign.id = "current-design-title";
        h1titleDesign.appendChild(h1content);


            // h1titleDesign.appendChild(h1content);
            // console.log(h1titleDesign.innerHTML);



        var content = h1titleDesign.innerHTML;
        var firstWord = content.split(" ").splice(-1);
      console.log(firstWord);


        h1titleDesign.innerHTML = " " + firstWord;







        if(variantContainer.hasChildNodes()) {
            // console.log(imgVariantContainer.alt);
            if(variantContainer.childNodes[3]){
                variantContainer.removeChild(variantContainer.childNodes[0]);
                variantContainer.prepend(imgVariantContainer);
                variantContainer.removeChild(variantContainer.childNodes[1]);
                currentdesign.prepend(h1titleDesign);
                // console.log(imgVariantContainer.alt);
            }
            else {
                variantContainer.removeChild(variantContainer.childNodes[0]);
                variantContainer.prepend(imgVariantContainer);
                // console.log(imgVariantContainer.alt);
                currentdesign.prepend(h1titleDesign);
            }
        }
    }
    else if(tag.tagName == "IMG" && tag.className == "container-right-img"){
        imgCurrentModel.src = tag.src;
        imgCurrentModel.className = "live-preview-current";
        imgCurrentModel.id = "live-preview-current";
        variantContainer.removeChild(variantContainer.childNodes[2]);
        document.getElementById("live-preview-current-variant").after(imgCurrentModel);
    }

    // if(tag.tagName == "IMG" && tag.className == "designs-img"){
    //     console.log(imgVariantContainer.alt)
    // }
}





more.addEventListener('click', () => {
    document.getElementById('live-preview-current-variant').style.height = document.getElementById('live-preview-current-variant').offsetHeight + document.getElementById('live-preview-current-variant').offsetHeight * 2 / 100 + 'px';
    document.getElementById('live-preview-current-variant').style.width = document.getElementById('live-preview-current-variant').offsetWidth + document.getElementById('live-preview-current-variant').offsetWidth * 2 / 100 + 'px';
    console.log('Alto ↑ ' + document.getElementById('live-preview-current-variant').offsetHeight);
    console.log('Ancho ↑' + document.getElementById('live-preview-current-variant').offsetWidth);
    if(document.getElementById('live-preview-current-variant').offsetHeight >= 800){
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
    if(document.getElementById('live-preview-current-variant').offsetHeight <= 350){
        less.classList.remove("zoom-button");
        less.classList.add("block-zoom-button");
        less.disabled = true;
        more.addEventListener('click', () => {
            less.classList.add("zoom-button");
            less.classList.remove("block-zoom-button");
            less.disabled = false;
        })
    }
});
console.log('Alto ' + document.getElementById('live-preview-current-variant').offsetHeight);
console.log('Ancho ' + document.getElementById('live-preview-current-variant').offsetWidth);

























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