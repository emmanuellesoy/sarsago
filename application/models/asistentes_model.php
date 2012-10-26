<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asistentes_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->database();
        
    }
    
    public function nuevo_m($datos) {
       $consulta = $this->db->insert('asistentes', $datos);
        if($consulta){
            return true;
        } else {
            return false;
        }
    }
    
    public function buscar_asistentes_m($apellidos) {
        
        $this->db->select();
        
        $this->db->from('asistentes');
        
        $this->db->like('apellidos', $apellidos);
        
        $consulta = $this->db->get();
        
        foreach ($consulta->result_array() as $value) {
        
            $results[] = $value;
       
            
       }

       if(isset($results)){
           
           return $results;
       
           
       } else {
           
           $results['mensaje'] = 0;
           
           return $results;
       
           
       }
    
       
    }
    
    public function marcar_presente_m($id) {
        $data = array(  'presente'  =>  1   );
        $this->db->where('id', $id);
        $consulta = $this->db->update('asistentes', $data);
        if($consulta){
            return true;
        } else {
            return false;
        }
    }
    /* Esta función extraé 
     * @param [array] $datos
     * @return [array] Regresa un arreglo que contiene un indice 'mensaje' 
     * el cual contiene un 0 si no existieron coincidencias 
     * y un 1 si hubo uno a más coincidencias
     */
    public function obtener_datos_asistente_m ($apellidos) {
        $this->db->select();
        $this->db->from('asistentes');
        $this->db->where('apellidos', $apellidos);
        $consulta = $this->db->get();
        foreach ($consulta->result_array() as $value) {
           $results[] = $value;
       }
       if(isset($results)){
           $results['mensaje'] = 1;
           return $results;
       } else {
           $results['mensaje'] = 0;
           return $results;
       }
    }
    
}
/* End of file asistentes_model.php */
/* Location: ./application/models/asistentes_model.php */