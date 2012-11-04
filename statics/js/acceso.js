$(document).ready(function(){
    var v = b + 'index.php/verificador/cotejar';
    $('#apellidos_buscar').tokenInput(v, {
        propertyToSearch: 'apellidos',
        minChars: 3,
        hintText: 'Escribe los apellidos del asistente...',
        noResultsText: 'No se encontraron coincidencias.',
        searchingText: 'Buscando...',
        resultsFormatter: function(item){return '<li>' + '<div style="display: inline-block; padding-left: 10px;"><div class="full_name">' + item.nombre + ' ' + item.apellidos + '</div></div></li>'},
        tokenFormatter: function(item) {return '<li id="selected" name="'+item.id+'"><p>' + item.nombre + ' ' + item.apellidos + '</p></li>'},
        theme: 'facebook'
    });
});

function asistio() {
    var id = $('#selected').attr('name');
    if(id){
        var v = b + 'index.php/verificador/marcar_presente/'+id;
        $.ajax({
            url: v,
            success: function(){
                alert('Acceso permitido');            
            }
        });
    }
    $('#apellidos_buscar').tokenInput("clear");
}

function registrar_nuevo() {
    
    var v = b + 'index.php/verificador/registrar_nuevo';
    
    var d = $('form').serialize();
    
    $.ajax({
        url: v,
        data: d,
        type: 'post',
        success: function(){
            alert('Registrado');
            $('input:not(.no-erase)').val('');
            $('#nombre').focus();
        } 
    });
    
    
}

function imprimir() {
    var id = $('#selected').attr('name');
    if(id){
        var v = b + 'index.php/asistentes/imprimir/'+id;
        $.ajax({
            url: v,
            success: function(data){
                $('#imprime').html(data);
            }
        });
    }
    $('#apellidos_buscar').tokenInput("clear");

}


function imprimirSelec(nombre)
{
 var ficha = document.getElementById(nombre);//almacenamos en variable los datos del div a imprimir
 var ventimp = window.open(' ', 'Impresion');//aqui se genera una pagina temporal 
 ventimp.document.write( ficha.innerHTML );//aqui cargamos el contenido del div seleccionado
 ventimp.document.close();//cerramos el documento
 ventimp.print( );//enviamos los datos a la impresora
 ventimp.close();//cerramos ventana temporal
}

function vipAlert()
{
    $('body').css('background-color', '#00CC00');
    //location.reload();
}

