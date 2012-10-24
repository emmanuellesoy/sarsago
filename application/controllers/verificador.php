<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verificador extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
    }
    
    /*
     * Muestra el formulario para introducir cadena a separar
     */

    public function lector_de_cadena () {
        
        
        
    }
    
    /*
     * Regresa la cadena separada en un arreglo.
     * @param [string] $char
     * @retunr [array] Devuelve un arreglo de la cadena ya seaparada cada vez que encuentra una letra capital
     */
    
    public function separador_de_cadena ($char) {
        
        
        
    }
    
    /*
     * Regresa un arreglo con los datos de las coincidencias
     * @param [array] $datos
     * @return [array] Regresa un arreglo que contiene un indice 'mensaje' el cual contiene un 0 si no
     * existieron coincidencias y un 1 si hubo uno a más coincidencias
     */
    
    public function cotejar ($datos) {
        
        
        
    }
    
    /*
     * Marca como presente cuando se dio acceso al evento a un asistente
     * @para [int] $id
     * @return [int] Regresa un 1 si se pudo realizar la consulta y un 0 si hubo algu error
     */
    
    public function marcar_presente ($id) {
        
        
        
    }
    
}

/* End of file verificador.php */
/* Location: ./application/controllers/verificador.php */