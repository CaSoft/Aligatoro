<?php
/**
 * referencias.php
 *
 * Controller para tratar os dados das referências/indicações
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package
 * @subpackage controllers
 */

/**
 * referencias
 *
 * @property CI_Loader  $load
 * @property CI_Input   $input
 */
class Referencias extends MY_Controller { 

    /**
     * Função construtora
     */
    public function  __construct() { 
        parent::__construct();
    }

    public function index() {
        $this->data['titulo_pagina'] = 'Gestão de referências/indicações';
        $this->data['view'] = 'config/referencias/index';
        $this->data['menu'] = 'config/referencias/menus/index';

        //$this->data['javascript'] = array(
        //    'config/referencias/index'
        //);
        
        $this->load->view('index.php', $this->data);
    }
}

/* End of file referencias.php */
/* Location: ./application/controllers/referencias.php */
