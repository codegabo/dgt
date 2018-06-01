let preview =  document.getElementById('preview-icon'),
    previewsection = document.getElementById('pdf-viewer-container'),
    iframePDF = document.createElement("IFRAME");

preview.addEventListener('click',previewpdf);

function previewpdf(){
    document.addEventListener("click",function(event) {
        if (event.target.id === "preview-icon" && innerWidth < 1024){
                // esto es para llamr el id traido desde la base de datos con PHP, la otra linea se deja mientrastanto para hacer pruebas de front end
                // preview.innerHTML = '<iframe src="http://docs.google.com/gview?url=https://www.digitalglobaltextiles.com/' + event.target.id + 'recibo.pdf&embedded=true" class="pdf-iframe" frameborder="0"></iframe>';
                preview.innerHTML = '<iframe src="http://docs.google.com/gview?url=https://www.digitalglobaltextiles.com/recibo.pdf&embedded=true" class="pdf-iframe iframe-responsive" id="pdf-iframe" frameborder="0"></iframe>';
        }
        if (event.target.id === "preview-icon" && innerWidth >= 1024){
            previewsection.innerHTML = '<iframe src="http://docs.google.com/gview?url=https://www.digitalglobaltextiles.com/recibo.pdf&embedded=true" class="pdf-iframe" id="pdf-iframe" frameborder="0"></iframe>';
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

