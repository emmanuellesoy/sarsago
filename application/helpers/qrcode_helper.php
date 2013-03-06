<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function generar_qr($id){
          
    echo $url = base_url().'statics/QR/qrlib.php';
    
    echo $img_url = base_url().'statics/img/code_bars/'.$id.'.png';
    
    require_once ($url);
    
    echo $url = base_url().'statics/QR/qrlib.php';
    
    echo $img_url = base_url().'statics/img/code_bars/'.$id.'.png';
    
    //QRcode::png($id, $img_url, 'H', 4, 4);

     }

?>