document.addEventListener("DOMContentLoaded", function() {
    function aPOST(url, cb, method, data = null) {
        var request = new XMLHttpRequest(); //declaras que haras una conexion httprequest

        request.onload = function(e) { //vento onload
            cb(request.responseText);
            /* aqui metes tu codigo o llamada a la funcion XD usando responseText; que es el texto devuelto*/
        };

        request.onerror = function(e) { //recojes errores
            alert("Error fetching " + url);
        };

        request.open(method, url, true); //abres la conexion

        if (data !== null) { //aqui validas si vas a enviar datos o solicitarlos; igual envias el request
            request.send(data);
        } else {
            request.send();
        }
    }

    var dmp = console.log.bind(console); // Devolución de llamada ficticia para volcar a la consola

    var formData = new FormData(); //gneras un objeto form data

    formData.append('Pais', $("#Pais").val()); //le agregas al form data la informacion de PAis

    //ejemplos:
    aPOST("http://country.io/names.json", dmp, 'GET'); // Ok, usa onload para activar la devolución de llamada
    aPOST("http://country.io/names.json", dmp, 'GET', formData); // Falla, usa un error para activar la alerta
});