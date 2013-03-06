<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asistentes_model extends CI_Model{
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->database();
        
    }
    /*
     * Esta funcion inserta a un nuevo asistente en la base de datos
     * @para [int] $datos
     * @return [int] Regresa un 1 si se pudo realizar 
     * la consulta y un 0 si hubo algu error
     */
    public function nuevo_m($datos) {
       
        $consulta = $this->db->insert('asistentes', $datos);
       
       if($consulta){
            
            $datos ['id'] = mysql_insert_id();
            
            $datos['mensaje'] = true;
            
        } else {
            
             $datos['mensaje'] = false;
            
        }
        
        return $datos;
    }

    /*
     * Esta funcion busca en la tabla asistentes al o los asistentes que
     * coincidan con los parametros de busqueda 
     * @para [int] $datos
     * @return [array] Regresa un arreglo que contiene un indice 'mensaje' 
     * el cual contiene un 0 si no existieron coincidencias 
     * y un 1 si hubo uno a más coincidencias
     */
    public function buscar_asistentes_m($apellidos) {
        
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
    /*Esta funcion inserta un buleano en la columna Presente 
     * @para [int] $id 
     * @return [int] Regresa un 1 si se pudo realizar 
     * la consulta y un 0 si hubo algu error
     */
    public function marcar_presente_m($id) {
        $data = array(
            'presente'  =>  1
        );
        
        $this->db->select('vip');
        
        $this->db->from('asistentes');
        
        $this->db->where('id', $id);
        
        $resultados = $this->db->get();
        
        if($resultados->num_rows() > 0){
        
            $this->db->where('id', $id);
            
            $consulta = $this->db->update('asistentes', $data);
            
            foreach ($resultados->result_array() as $row){
                
                $datos[] = $row;
                
            }
            
            $datos['mensaje'] = 'existe';
        
        } else {
        
            $datos['mensaje'] = 'no_existe';
        
        }
        
        return $datos;
        
    }
    /* Esta función extrae los datos de un asistente seleccionado 
     * @para [int] $datos
     * @return [array] Regresa un arreglo que contiene un indice 'mensaje' 
     * el cual contiene un 0 si no existieron coincidencias 
     * y un 1 si hubo uno a más coincidencias
     */
    public function obtener_datos_asistente_m ($id) {
        $this->db->select();
        $this->db->from('asistentes');
        $this->db->where('id', $id);
        $consulta = $this->db->get();
        foreach ($consulta->result_array() as $value) {
           $results = $value;
       }
       if(isset($results)){
           $results['mensaje'] = 1;
           return $results;
       } else {
           $results['mensaje'] = 0;
           return $results;
       }
    }  
    
    
     /* 
    * Método consulta el ID del asistente la base de datos
    * @author Jorge Olvera
    * @date 2013.02.27
    * @updated 0000.00.00
    * @param array datos | busca el ID del asistente.
    * @return datos | regrea el ID del Asistente .
    * @ejem id=  1.
    */
    
    
     public function consulta_id($datos){
        
        $this->db->select('id');
        
        $this->db->from('asistentes');
        
        $this->db->where('id', $datos['id']);
        
        $datos = $query = $this->db->get();
        
        
        
        return $datos;
        
        
        
    }//fin de consulta ID
    
    
    public function insertar_datos($datos){
    $consulta = $this->db->insert_batch('asistentes', $datos); 
     if($consulta){
            return true;
        } else {
            return false;
        }
 }
}
 


/* End of file asistentes_model.php */
/* Location: ./application/models/asistentes_model.php */
?>