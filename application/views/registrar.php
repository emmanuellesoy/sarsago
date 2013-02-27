<!-- Main Blog Content -->
    <div class="six columns centered" role="content">

      <article>

      
    
    <div id="wrapping" class="clearfix">
      <form name="registro" id="form" method="post" action="<?=base_url(); ?>index.php/verificador/registrar_nuevo">
      
          <section id="aligned">
          
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" autocomplete="on" tabindex="1" class="txtinput" required="required">

            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" autocomplete="on" tabindex="2" class="txtinput" required="required">

            <select id="sexo" name="sexo" tabindex="3" class="selmenu" required="required">
                <option value="sexo">Sexo</option>
                <option value="0">Masculino</option>
                <option value="1">Femenino</option>
            </select>

              <select id="estado" name="estado" tabindex="4" class="selmenu" required="required" >
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


          <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" autocomplete="on" tabindex="5" class="txtinput" autocomplete="on" required="required">
          <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="on" tabindex="6" class="txtinput" >
          <input type="tel" name="telefono" id="telefono" placeholder="Telefono" autocomplete="on" tabindex="7" class="txtinput">
          <input type="tel" name="celular" id="celular" placeholder="Celular" autocomplete="on" tabindex="8" class="txtinput">

          <select name="oij" id="oij" tabindex="9" class="selmenu">
                <option>- - Organo Impartidor de Justicia - -</option>
                <option value="Suprema Corte de Justicia de la Nación" >Suprema Corte de Justicia de la Nación</option>
                <option value="Consejo de la Judicatura Federal">Consejo de la Judicatura Federal</option>
                <option value="Tribunal Electoral del Poder Judicial de la Federación" >Tribunal Electoral del Poder Judicial de la Federación</option>
                <option value="Poderes Judiciales de las Entridades Federativas" >Poderes Judiciales de las Entridades Federativas</option>
                <option value="Tribunal Federal de Justicia Fiscal y Administrativa" >Tribunal Federal de Justicia Fiscal y Administrativa</option>
                <option value="Tribunales Contenciosos Administrativos Locales" >Tribunales Contenciosos Administrativos Locales</option>
                <option value="Tribunales Electorales Locales" >Tribunales Electorales Locales</option>
                <option value="Junta Federal de Conciliación y Arbitraje" >Junta Federal de Conciliación y Arbitraje</option>
                <option value="Juntas Locales de Conciliacion y Arbitraje" >Juntas Locales de Conciliacion y Arbitraje</option>
                <option value="Tribunal Federal de Conciliación y Arbitraje" >Tribunal Federal de Conciliación y Arbitraje</option>
                <option value="Tribunal Superior Agrario" >Tribunal Superior Agrario</option>
                <option value="Tribunales Burocráticos(Locales)de Conciliación y Arbitraje" >Tribunales Burocráticos(Locales)de Conciliación y Arbitraje</option>
          </select>
              
           <input type="text" name="adscripcion" id="adscripcion" placeholder="Adscripcion" autocomplete="on" tabindex="10" class="txtinput">

          <select id="cargo" name="cargo"  tabindex="11" class="selmenu">
                <option>- - Cargo - -</option>
                <option value="Juez" >Juez</option>
                <option value="Magistrado">Magistrado</option>
                <option value="Ministro" >Ministro</option>
                <option value="Presidente" >Presidente</option>
                <option value="Impartidor de Justicia Laboral" >Impartidor de Justicia Laboral</option>
        </select>
        
        <input type="date" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiennto" autocomplete="on" tabindex="12" class="txtinput">

        <input type="identificacion" name="identificacion" id="idenficacion" placeholder="Identificacion" tabindex="13" class="txtinput">
    
        <section class="eight columns centered" id="buttons">
             <input type="reset" id="resetbtn" class="resetbtn no-erase" tabindex="14" value="Borrar">
             <input type="button" id="registrar"  onclick="registrar_nuevo()" class="submitbtn no-erase" tabindex="15" value="Registrar">
             
         </section>
        
      </section>

         <br style="clear:both;">
    </form>
      </article>
 </div>

    <!-- End Main Content -->