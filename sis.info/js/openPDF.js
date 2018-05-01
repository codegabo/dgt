let preview =  document.getElementById('preview-icon'),
details = document.getElementsByClassName('container-list-files-text');

preview.addEventListener('click',previewpdf);

function previewpdf(){
    document.addEventListener("click",function(event) {
        // let idtarget = event.target.id;
        if (event.target.id === "preview-icon"){
            preview.innerHTML = '<iframe src="http://docs.google.com/gview?url=https://www.digitalglobaltextiles.com/recibo.pdf&embedded=true" class="pdf-iframe" frameborder="0"></iframe>';
        }
    })

}

