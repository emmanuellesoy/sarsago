<!-- Main Blog Content -->
    <div class="nine columns" role="content">

      <article>

      <form name="Registro" id="form" method="post" action="<?=base_url(); ?>index.php/verificador/registrar_nuevo">
    
    <div id="wrapping" class="clearfix">
      
      <section id="aligned">
      
      <input type="text" name="nombre" id="nombre" placeholder="Nombre" autocomplete="on" tabindex="1" class="txtinput">
    
      <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" autocomplete="on" tabindex="2" class="txtinput">
    
          <select id="sexo" name="sexo" tabindex="3" class="selmenu">
              <option value="sexo">Sexo</option>
              <option value="0">Masculino</option>
              <option value="1">Femenino</option>
          </select>

      <select id="estado" name="estado" tabindex="4" class="selmenu" >

                <option value="Estado" >Selecciona un estado</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="BC" >Baja California</option>
                <option value="BCS" >Baja California Sur</option>
                <option value="Campeche" >Campeche</option>
                <option value="Chiapas" >Chiapas</option>
                <option value="Chihuahua" >Chihuahua</option>
                <option value="Coahuila" >Coahuila</option>
                <option value="Colima" >Colima</option>
                <option value="DF" id="DF" name="DF">Distrito Federal</option>
                <option value="Durango" >Durango</option>
                <option value="Guanajuato" >Guanajuato</option>
                <option value="Guerrero" >Guerrero</option>
                <option value="Hidalgo" >Hidalgo</option>
                <option value="Jalisco" >Jalisco</option>
                <option value="Mexico" >Mexico</option>
                <option value="Michoacan" >Michoacan</option>
                <option value="Morelos" >Morelos</option>
                <option value="Nayarit" >Nayarit</option>
                <option value="NL" >Nuevo Leon</option>
                <option value="Oaxaca" >Oaxaca</option>
                <option value="Puebla" >Puebla</option>
                <option value="Queretaro" >Queretaro</option>
                <option value="QR" >Quintana Roo</option>
                <option value="SLP">San Luis Potosi</option>
                <option value="Sinaloa" >Sinaloa</option>
                <option value="Sonora" >Sonora</option>
                <option value="Tabasco" >Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala" >Tlaxcala</option>
                <option value="Veracruz" >Veracruz</option>
                <option value="Yucatan" >Yucatan</option>
                <option value="Zacatecas" >Zacatecas</option>
          </select>


      <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" autocomplete="on" tabindex="5" class="txtinput" autocomplete="on">
          <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="on" tabindex="6" class="txtinput">
          <input type="tel" name="telefono" id="telefono" placeholder="Telefono" autocomplete="on" tabindex="7" class="txtinput">
          <input type="tel" name="celular" id="celular" placeholder="Celular" autocomplete="on" tabindex="8" class="txtinput">

           <select name="oij" id="oij" tabindex="9" class="selmenu">

               
                <option>- - Organo Impartidor de Justicia - -</option>
                <option value="SCJN" >Suprema Corte de Justicia de la Nación</option>
                <option value="CJf">Consejo de la Judicatura Federal</option>
                <option value="TEPJF" >Tribunal Electoral del Poder Judicial de la Federación</option>
                <option value="PJEF" >Poderes Judiciales de las Entridades Federativas</option>
                <option value="TFJFA" >Tribunal Federal de Justicia Fiscal y Administrativa</option>
                <option value="TCAL" >Tribunales Contenciosos Administrativos Locales</option>
                <option value="TEL" >Tribunales Electorales Locales</option>
                <option value="JFCA" >Junta Federal de Conciliación y Arbitraje</option>
                <option value="JLCA" >Juntas Locales de Conciliacion y Arbitraje</option>
                <option value="TFCA" >Tribunal Federal de Conciliación y Arbitraje</option>
                <option value="TSA" >Tribunal Superior Agrario</option>
                <option value="TBCA" >Tribunales Burocráticos(Locales)de Conciliación y Arbitraje</option>

          </select>
              
           <input type="text" name="adscripcion" id="adscripcion" placeholder="Adscripcion" autocomplete="on" tabindex="10" class="txtinput">

          <select id="cargo" name="cargo"  tabindex="11" class="selmenu">

                    <option>- - Cargo - -</option>
                    <option value="Juez" >Juez</option>
                    <option value="Magistrado">Magistrado</option>
                    <option value="Ministro" >Ministro</option>
                    <option value="Presidente" >Presidente</option>
                    <option value="IJL" >Impartidor de Justicia Laboral</option>

          </select>
        
        <input type="date" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiennto" autocomplete="on" tabindex="12" class="txtinput">

        </section>



    
      <input type="identificacion" name="identificacion" id="idenficacion" placeholder="Identificacion" tabindex="13" class="txtinput">
    
      
      </section>

    <section id="buttons">
      <input type="reset" id="resetbtn" class="resetbtn no-erase" tabindex="15" value="Borrar">
      <input type="button" id="registrar"  onclick="registrar_nuevo()" class="submitbtn no-erase" tabindex="14" value="Registrar">
      <br style="clear:both;">
    </section>
    </form>
      </article>

      <hr />

      

    </div>

    <!-- End Main Content -->