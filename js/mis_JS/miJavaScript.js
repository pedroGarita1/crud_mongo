// 14-10-2021
// Hya 2 tipos de elementos importantes de leer

/**
 * div es un elemento generico
 * no contempla caracteristicas unicas y especificas
 * no permiten tener informacion
 */

$(document).ready(function() {
    console.log("Documento listo en el navegador");

    // Leer desde un un div de HTML (elemento que no permite escribir dentro de el)
    let texto_leido = $('#objetivo').text();
    console.log(texto_leido);

    //Escribir texto dentro de un div HTML
    $('#objetivo2').text("Hola mundo");

    //--------------------------------------------------------------------------------
    let valor_leido = $('#caja_input').val(); // Es recomendable poner la varaible aqui para evitar

    // Si quieres usar algo, seleccionalo
    $('#btn_leer').click(function() {
        // Ejemplo de Lecturta en un input de tipo texto
        // Aqui estas reescribiendo el comportamiento de un boton
        valor_leido = $('#caja_input').val();
        alert("El valor fue: " + valor_leido);
    });

    // Ejemplo de como programar un boton
    $('#btn_escribir').click(function() {
        // Ejemplo de escritura en un input de tipo texto
        $('#caja_input').val("Escribe tu nombre aqui: ");
    });
});