<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function generar_qr($id){
          
    $url = base_url().'statics/QR/qrlib.php';
    
    include($url);   

    QRcode::png($id, base_url()."statics/img/cod_bars/$id.png", "H", 4, 4);

     }

?>