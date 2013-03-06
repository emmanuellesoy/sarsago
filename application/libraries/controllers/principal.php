<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

    public function __construct() {
   
        parent::__construct();
    
        $this->load->helper(array('url', 'html'));
        
    }

    public function index ($section = 'acceso') {
        
        $data['head'] = $this->load->view('head', '', TRUE);
        
        $data['nav'] = $this->load->view('menu-navegacion', '', TRUE);
        
        $data['section'] = $this->load->view($section, '', TRUE);
        
        //Carga el espacio de la camara
        //$data['toolbar'] = $this->load->view('toolbar', $data, TRUE);
        
        $data['footer'] = $this->load->view('footer', '', TRUE);
        
        $data['content'] = $this->load->view('content', $data, TRUE);
        
        $this->load->view('principal', $data);
	
    }
    
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */