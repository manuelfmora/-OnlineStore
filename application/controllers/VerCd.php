<?php

/**
 * Description of VerCd
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class VerCd extends CI_Controller{
    
       public function __construct() {
        parent::__construct();
        $this->load->helper('descuentos_helper');
        $this->load->model('M_Cd'); 
//        $this->load->library('Carro', 0, 'myCarrito');
    }

    
    /**
     * Muestra la camiseta de forma detallada
     * @param Int $idCamiseta ID de la camiseta
     */
    public function ver($idcd) {
        
        //Información de camiseta
       
        if ($this->M_Cd->SiSeDebeMostarProducto($idcd)) {

           $producto = $this->M_Cd->getProducto($idcd); //Conseguimos la camiseta a mostrar
    

            $categoria = $this->M_Cd->getInfoCategoriaFromProducto($producto['idCategoria']); //Conseguimos la categoría

            $productorelacionados = $this->M_Cd->getProductosRelacionadasFromCategoria($producto['idCategoria'], $producto['idProducto']); //Camisetas relacionadas

            $cuerpo = $this->load->view('V_Detalles', Array('producto' => $producto,  
                                                            'categoria' => $categoria['nombre_cat'],
                                                            'stock'=>$producto['stock'],
                                                            'titulo' => $producto['descripcion'],   
                                                            'productosrelacionados' => $productorelacionados),
                                                             true);  
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo, 
                                                  'homeactive' => 'active'));
         
        } else {
            $cuerpo = $this->load->view('V_404', Array('' => ''), true);
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo, 'homeactive' => 'active', 'titulo' => 'Error'));
        }
    }
}
