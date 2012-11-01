<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asistentes extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->model(array('asistentes_model'));
        
        $this->load->helper(array('url'));
        
    }
    
    /*
     * Registra un nuevo asistente, recibe los valores via post
     * @return regresa un 1 si fue registrado con exito y un 0 si no fue asi
     */
    
    public function nuevo() {
        
        
        
    }
    
    /*
     * Busca la información de un asistente y la devuelve a la vista, se pasan los datos via post
     * @return [array] El arreglo de datos del asistente en caso de que existaen la BD
     * @return [array] Un mensaje con el valor 0 que indica que no fue encontrado el ususario en la BD
     */
    
    public function imprimir($id) {
        
        $datos = $this->asistentes_model->obtener_datos_asistente_m($id);
        
        $apellidos_img = explode(' ', $datos['apellidos']);
        
        $img_name = '';
        
        foreach ($apellidos_img as $apellido_img){
            
            $img_name = $img_name.$apellido_img;
            
        }
        
        $datos['img_name'] = $img_name;
        
        $datos = $this->load->view('formulario_para_impresion', $datos, TRUE);
        
        echo $datos;
        
    }
    
}

/* End of file asistentes.php */
/* Location: ./application/controllers/asistentes.php */