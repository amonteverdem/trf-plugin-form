<?php
/**
* Plugin Name: trf form agro
* Author: Antonio Monteverde
* Description: Plugin de TRF para Agrosuper
*/

// Define el shortcode y lo asocia a una función
add_shortcode('trf_agrosuper_form', 'trf_agrosuper_form');
 
/** 
 * Define la función que ejecutará el shortcode
 * De momento sólo pinta un formulario que no hace nada
 * 
 * @return string
 */
function trf_agrosuper_form() 
{
    // Esta función de PHP activa el almacenamiento en búfer de salida (output buffer)
    // Cuando termine el formulario lo imprime con la función ob_get_clean
    ob_start();
    ?>
    <form action="<?php get_the_permalink(); ?>" method="post" id="form_indicadores
class="indicadores"">
        <div class="form-input">
            <label for="IDTIENDA">ID TIENDA</label>
            <input type="text" name="IDTIENDA" id="ID TIENDA" style="width:100px;height:15px"  required>
            <br>
        </div>
        <div class="form-input">
            <label for='IDVENDEDOR'>ID VENDEDOR</label>
            <input type="text" name="IDVENDEDOR" id="ID VENDEDOR" style="width:100px;height:15px"  required>
            <br>
        </div>
        <div class="form-input">
            <label for='METROS2'>METROS CUADRADOS(metros de fondo por metros de frente)</label>
            <input type="number" name="METROS2" id="METROS CUADRADOS" style="width:100px;height:15px"  required>
            <br>
        </div>
        <div class="form-input">
            <label for="TIPOTIENDA">TIPO DE TIENDA</label>
            <input type="radio" name="TIPOTIENDA" value="1" required> ABARROTES
            <br><input type="radio" name="TIPOTIENDA" value="2" required> MISCELANEAS DE TODO
            <br><input type="radio" name="TIPOTIENDA" value="3" required> MINI SUPER QUE TIENE AUTOSERVICIO
        </div>
        <br></br>
        <label for="CANALMOD">CANAL MODERNO(suma de todas las tiendas dentro del listado que se encuentran a 200 metros
         / 2 calles a la redonda de la tienda considerando la cantidad de cada una de ellas)</label>
        <div class="form-input">
            <label for="CANALMOD_OXXO">OXXO</label>
            <input type="number" size="10" name="CANALMOD_OXXO" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_OKMARKET">OK MARKET</label>
            <input type="number" size="10" name="CANALMOD_OKMARKET" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_UPA">UPA</label>
            <input type="number" size="10" name="CANALMOD_UPA" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_PUNCOPEC">PUNTO COPEC</label>
            <input type="number" size="10" name="CANALMOD_PUNCOPEC" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_PROCOPEC">PRONTO COPEC</label>
            <input type="number" size="10" name="CANALMOD_PROCOPEC" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_ESPACIO1">ESPACIO 1</label>
            <input type="number" size="10" name="CANALMOD_ESPACIO1" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_ACUENTA">ACUENTA</label>
            <input type="number" size="10" name="CANALMOD_ACUENTA" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_ALVI">ALVI</label>
            <input type="number" size="10" name="CANALMOD_ALVI" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_ERBI">ERBI</label>
            <input type="number" size="10" name="CANALMOD_ERBI" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_HLIDER">HIPER LIDER</label>
            <input type="number" size="10" name="CANALMOD_HLIDER" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_JUMBO">JUMBO</label>
            <input type="number" size="10" name="CANALMOD_JUMBO" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_LIDEREXP">LIDER EXPRESS</label>
            <input type="number" size="10" name="CANALMOD_LIDEREXP" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_MAYO10">MAYORISTA 10</label>
            <input type="number" size="10" name="CANALMOD_MAYO10" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_MONTSERRAT">MONTSERRAT</label>
            <input type="number" size="10" name="CANALMOD_MONTSERRAT" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_SANTAISA">SANTA ISABEL</label>
            <input type="number" size="10" name="CANALMOD_SANTAISA" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_TOTTUS">TOTTUS</label>
            <input type="number" size="10" name="CANALMOD_TOTTUS" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALMOD_UNIMARC">UNIMARC</label>
            <input type="number" size="10" name="CANALMOD_UNIMARC" value="0" min="1" max="10" style="width:70px;height:15px" required>
        </div>
        <br>
        <label for="FLUJO">FLUJO (suma de todos los puntos dentro del listado que se encuentra a 200 metros
         / 2 calles a la redonda de la tienda considerando la cantidad de cada una de ellas)</label>
         <div class="form-input">
            <label for="FLUJO_COLEGIO">COLEGIO</label>
            <input type="number" size="10" name="FLUJO_COLEGIO" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_JARDININF">JARDIN DE INFANCIA</label>
            <input type="number" size="10" name="FLUJO_JARDININF" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_UNIV">UNIVERSIDAD</label>
            <input type="number" size="10" name="FLUJO_UNIV" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_GYM">GIMNASIO</label>
            <input type="number" size="10" name="FLUJO_GYM" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_METRO">METRO</label>
            <input type="number" size="10" name="FLUJO_METRO" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_PARADERO">PARADERO DE MICROS</label>
            <input type="number" size="10" name="FLUJO_PARADERO" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_HOSPITAL">HOSPITAL</label>
            <input type="number" size="10" name="FLUJO_HOSPITAL" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_PARQUE">PARQUE</label>
            <input type="number" size="10" name="FLUJO_PARQUE" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_TAXI">TAXI</label>
            <input type="number" size="10" name="FLUJO_TAXI" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_COMPLEJOS">COMPLEJOS DEPORTIVOS</label>
            <input type="number" size="10" name="FLUJO_COMPLEJOS" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="FLUJO_CONSTRU">CONSTRUCCION EN PROCESO</label>
            <input type="number" size="10" name="FLUJO_CONSTRU" value="0" min="1" max="10" style="width:70px;height:15px" required>
        </div>
        <BR></BR>
        <label for="MAQUINAS">MAQUINAS E IMPLEMENTOS (suma de todos los puntos dentro del listado considerando la cantidad de cada uno de ellos)</label>
        <div class="form-input">
            <label for="MAQ_CAJA">CAJA REGISTRADORA</label>
            <input type="number" size="10" name="MAQ_CAJA" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_IMPRE">IMPRESORA DE TICKET O RECIBO</label>
            <input type="number" size="10" name="MAQ_IMPRE" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_GONDOLAS">GONDOLAS</label>
            <input type="number" size="10" name="MAQ_GONDOLAS" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_CODBAR">LECTOR DE CODIGO DE BARRA</label>
            <input type="number" size="10" name="MAQ_CODBAR" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_REFRI">TIENE REFRIGERADORES PROPIOS</label>
            <input type="number" size="10" name="MAQ_REFRI" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_MESAS">TIENE MESAS</label>
            <input type="number" size="10" name="MAQ_MESAS" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_QUITASOL">TIENE QUITASOL</label>
            <input type="number" size="10" name="MAQ_QUITASOL" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_BARRA">TIENE BARRA PARA QUE EL CLIENTE COMA/SIRVA/COMPLEMENTE SU COMIDA</label>
            <input type="number" size="10" name="MAQ_BARRA" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_TOLDO">TIENE TOLDO</label>
            <input type="number" size="10" name="MAQ_TOLDO" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_CAFE">TIENE MAQUINA DE CAFE</label>
            <input type="number" size="10" name="MAQ_CAFE" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="MAQ_HMICRO">TIENE HORNO MICROONDAS</label>
        </div>
        <div class="form-input">
            <label for='COMPETENCIA'>COMPETENCIA(almacen similar al encuestado)</label>
            <input type="number" name="COMPETENCIA" id="METROS CUADRADOS" style="width:100px;height:15px"  required>
            <br>
        </div>
        <div class="form-input">
            <label for='FASTFOOD'>COMIDA (cantidad de restaurantes fast food que se encuentran a 200 metros / 2 calles a la redonda de la tienda)</label>
            <input type="number" name="FASTFOOD" id="METROS CUADRADOS" style="width:100px;height:15px"  required>
            <br>
        </div>
        <div class="form-input">
            <label for="ZONADOM_200">ZONA DOMINANTE 200 METROS</label>
            <input type="radio" name="ZONADOM_200" value="1" required> RESIDENCIAL
            <br><input type="radio" name="ZONADOM_200" value="2" required> OFICINAS
            <br><input type="radio" name="ZONADOM_200" value="3" required> COMERCIAL
            <br><input type="radio" name="ZONADOM_200" value="4" required> INDUSTRIAL
            <br><input type="radio" name="ZONADOM_200" value="5" required> CARRETERA
        </div>
        <br>
        <label for="CANALTRAD">CANAL (suma de todas las tiendas dentro del listado que se encuentran a 200 metros
         / 2 calles a la redonda de la tienda considerando la cantidad de cada una de ellas)</label>
        <div class="form-input">
            <label for="CANALTRAD_OXXO">OXXO</label>
            <input type="number" size="10" name="CANALTRAD_OXXO" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_OKMARKET">OK MARKET</label>
            <input type="number" size="10" name="CANALTRAD_OKMARKET" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_UPA">UPA</label>
            <input type="number" size="10" name="CANALTRAD_UPA" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_PUNCOPEC">PUNTO COPEC</label>
            <input type="number" size="10" name="CANALTRAD_PUNCOPEC" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_PROCOPEC">PRONTO COPEC</label>
            <input type="number" size="10" name="CANALTRAD_PROCOPEC" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_ESPACIO1">ESPACIO 1</label>
            <input type="number" size="10" name="CANALTRAD_ESPACIO1" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_ACUENTA">ACUENTA</label>
            <input type="number" size="10" name="CANALTRAD_ACUENTA" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_ALVI">ALVI</label>
            <input type="number" size="10" name="CANALTRAD_ALVI" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_ERBI">ERBI</label>
            <input type="number" size="10" name="CANALTRAD_ERBI" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_HLIDER">HIPER LIDER</label>
            <input type="number" size="10" name="CANALTRAD_HLIDER" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_JUMBO">JUMBO</label>
            <input type="number" size="10" name="CANALTRAD_JUMBO" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_LIDEREXP">LIDER EXPRESS</label>
            <input type="number" size="10" name="CANALTRAD_LIDEREXP" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_MAYO10">MAYORISTA 10</label>
            <input type="number" size="10" name="CANALTRAD_MAYO10" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_MONTSERRAT">MONTSERRAT</label>
            <input type="number" size="10" name="CANALTRAD_MONTSERRAT" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_SANTAISA">SANTA ISABEL</label>
            <input type="number" size="10" name="CANALTRAD_SANTAISA" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_TOTTUS">TOTTUS</label>
            <input type="number" size="10" name="CANALTRAD_TOTTUS" value="0" min="1" max="10" style="width:70px;height:15px" required>
            <label for="CANALTRAD_UNIMARC">UNIMARC</label>
            <input type="number" size="10" name="CANALTRAD_UNIMARC" value="0" min="1" max="10" style="width:70px;height:15px" required>
        </div>
        <br>        

        <div class="form-input">
            <label for="aceptacion">La información facilitada se tratará 
            con respeto y admiración.</label>
            <input type="checkbox" id="aceptacion" name="aceptacion"
value="1" required> Entiendo y acepto las condiciones
        </div>
        <div class="form-input">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
     
    // Devuelve el contenido del buffer de salida
    return ob_get_clean();
}