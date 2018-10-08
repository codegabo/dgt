let labelPreview =  document.getElementById('label-preview-icon'),
    previewsection = document.getElementById('pdf-viewer-container'),
    viewIframe = document.createElement("iframe");

labelPreview.addEventListener('click',previewpdf);

function previewpdf(){
    document.addEventListener("click",function(event) {
        viewIframe.src = "https://docs.google.com/gview?url=https://www.digitalglobaltextiles.com/pdf/archivos/" + event.target.value + "&embedded=true";
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