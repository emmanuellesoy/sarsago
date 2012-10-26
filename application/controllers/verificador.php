<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verificador extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->model(array('asistentes_model'));
        
        $this->load->helper(array('url'));
        
    }
    
    /*
     * Regresa un arreglo con los datos de las coincidencias
     * @param [array] $datos
     * @return [array] Regresa un arreglo que contiene un indice 'mensaje' el cual contiene un 0 si no
     * existieron coincidencias y un 1 si hubo uno a más coincidencias
     */
    
    public function cotejar () {
        
        $datos['apellidos'] = $this->input->get('q', TRUE);
       
        $asistentes  = $this->asistentes_model->buscar_asistentes_m($datos['apellidos']);
        
        echo json_encode($asistentes);
        
    }
    
    /*
     * Marca como presente cuando se dio acceso al evento a un asistente
     * @para [int] $id
     * @return [int] Regresa un 1 si se pudo realizar la consulta y un 0 si hubo algu error
     */
    
    public function marcar_presente ($id) {
        
        if(trim($id) != ''){
            echo $this->asistentes_model->marcar_presente_m($id);
        } else {
            echo 0;
        }
        
        
    }
    
    public function registrar_nuevo () {
        
        $registrado = $this->asistentes_model->nuevo_m($this->input->post());
        
        if($registrado){
            
            echo 'Usuario registrado exitosamente'; 
            
        } else {
            
            echo 'Error, lo sentimos, el usuario no pudo ser registrado';
            
        }
        
    }
    
}

/* End of file verificador.php */
/* Location: ./application/controllers/verificador.php */