let labelPreview =  document.getElementById('label-preview-icon'),
    previewsection = document.getElementById('pdf-viewer-container'),
    iframePDF = document.createElement("IFRAME"),
    idDocument  = document.getElementById('id_documento'),
    viewIframe = document.createElement("iframe");

labelPreview.addEventListener('click',previewpdf);

function previewpdf(){
    document.addEventListener("click",function(event) {
        viewIframe.src = "http://docs.google.com/gview?url=https://www.digitalglobaltextiles.com/pdf/archivos/" + event.target.value + "&embedded=true";
        viewIframe.className = "pdf-iframe iframe-responsive";
        viewIframe.id = "pdf-iframe";
        viewIframe.frameBorder = "0";
        if (event.target.id === "preview-icon" && innerWidth < 768){

            event.target.parentElement.prepend(viewIframe);
        }
        if (event.target.id === "preview-icon" && innerWidth >= 768){
            previewsection.innerHTML = '<iframe src="http://docs.google.com/gview?url=https://www.digitalglobaltextiles.com/pdf/archivos/' + event.target.value + '&embedded=true" class="pdf-iframe" id="pdf-iframe" frameborder="0"></iframe>';
        }

    })
}
addEventListener('resize', previewpdf);
addEventListener('DOMContentLoaded', previewpdf);
// el mismo codigo de arriba pero con appenchild
// let preview =  document.getElementById('preview-icon'),
//     previewsection = document.getElementById('pdf-viewer-container'),
//     iframePDF = document.createElement("IFRAME");
//
// preview.addEventListener('click',previewpdf);
//
// function previewpdf(){
//     document.addEventListener("click",function(event) {
//         if (event.target.id === "preview-icon" && innerWidth < 1024){
//             preview.appendChild(iframePDF);
//             document.body.appendChild(preview);
//         } else {
//             preview.removeChild(iframePDF);
//             document.body.removeChild(preview);
//             previewsection.appendChild(iframePDF);
//             document.body.appendChild(previewsection)
//         }
//     })
// }
// addEventListener('resize', previewpdf);
// addEventListener('DOMContentLoaded', previewpdf);

