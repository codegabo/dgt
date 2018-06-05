
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
    imageFull = document.createElement("img"),
    fullViewContainer = document.getElementById("live-preview-current-variant-fullview"),
    modelFull = document.getElementById('live-preview-current'),
    formData = document.getElementById('send-data'),
    inputWidth = document.createElement("input"),
    inputHeight = document.createElement("input"),
    inputimgdesign = document.createElement("input"),
    inputimgModel = document.createElement("input"),
    inputDesignName = document.createElement("input"),
    modelFullContainer = document.getElementById('live-preview-current-variant-fullview');


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


        imageFull.src = document.getElementById('live-preview-current-variant').src;
        imageFull.className = "live-preview-current-variant";
        imageFull.id = "live-preview-current-variant";
        imageFull.alt = tag.alt;
        imageFull.style.width = document.getElementById('live-preview-current-variant').style.width;
        imageFull.style.height = document.getElementById('live-preview-current-variant').style.height;
        fullViewContainer.prepend(imageFull);




        inputWidth.type = "hidden";
        inputWidth.name = "width";
        inputWidth.id= "inputWidth";
        inputWidth.value = document.getElementById('live-preview-current-variant').style.width;
        formData.prepend(inputWidth);

        inputHeight.type = "hidden";
        inputHeight.name = "height";
        inputHeight.id= "inputHeight";
        inputHeight.value = document.getElementById('live-preview-current-variant').style.height;
        formData.prepend(inputHeight);

        inputimgdesign.type = "hidden";
        inputimgdesign.name = "diseno";
        inputimgdesign.id = "inputImgDesign";
        inputimgdesign.value = document.getElementById('live-preview-current-variant').src;
        formData.prepend(inputimgdesign);





        console.log("alto var " + document.getElementById('live-preview-current-variant').style.height);
        console.log("ancho var " + document.getElementById('live-preview-current-variant').style.width);


        h1titleDesign.className = "current-design-title";
        h1titleDesign.id = "current-design-title";
        h1titleDesign.appendChild(h1content);

        var content = h1titleDesign.innerHTML;
        var firstWord = content.split(" ").splice(-1);
      console.log(firstWord);

        h1titleDesign.innerHTML = " " + firstWord;

        inputDesignName.type = "hidden";
        inputDesignName.name = "nombre";
        inputDesignName.id = "inputDesignName";
        inputDesignName.value = " " + firstWord;
        formData.prepend(inputDesignName);



        if(variantContainer.hasChildNodes()) {
            if(variantContainer.childNodes[3]){
                variantContainer.removeChild(variantContainer.childNodes[0]);
                variantContainer.prepend(imgVariantContainer);
                variantContainer.removeChild(variantContainer.childNodes[1]);
                currentdesign.prepend(h1titleDesign);
            }
            else {
                variantContainer.removeChild(variantContainer.childNodes[0]);
                variantContainer.prepend(imgVariantContainer);
                currentdesign.prepend(h1titleDesign);
            }
        }
    }
    else if(tag.tagName == "IMG" && tag.className == "container-right-img"){

        modelFull.src = document.getElementById('live-preview-current').src;
        modelFull.className = "live-preview-current";
        modelFull.id = "live-preview-current";
        modelFullContainer.prepend(modelFull);

        inputimgModel.type = "hidden";
        inputimgModel.name= "modelo";
        inputimgModel.id= "inputImgModel";
        inputimgModel.value = document.getElementById('live-preview-current').src;
        formData.prepend(inputimgModel);



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