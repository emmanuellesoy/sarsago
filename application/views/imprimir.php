<!-- Inicia vista Impresion -->
<div class="nine columns" role="content">

    <article>

    <form name="Registro" id="form" method="post" action="#">
    <div id="wrapping" class="clearfix">

    <section id="aligned">
    <input autofocus type="text" name="apellidos_buscar" id="apellidos_buscar" placeholder="Ingresa el Nombre" autocomplete="off" tabindex="1" class="txtinput">

    </div>


    <section id="buttons">
        <input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Borrar">
        <input type="button" name="submit" id="submitbtn" class="submitbtn" onclick="imprimir()" value="Buscar">
        <br style="clear:both;">
    </section>
</form>
    </article>

    <div id="imprime">

    </div>
    
    

    
    <hr />

</div>

<!-- Termina vista Impresion -->