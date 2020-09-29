$(document).ready(function(){

    $('#foto_soporte_pago').fileinput({
        language: 'es',
        allowedFileExtensions: ['jpg','jpeg','png'],
        maxFileSiza: 2000,
        showUpload: false,
        showClose: false,
        initialPreviewAsData: true,
        dropZoneEnabled: false,
        theme:"fas",
    });

});