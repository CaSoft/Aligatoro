<?php
/**
 * painel.php
 *
 * Controller que exibe o painel (opções) das configurações do sistema
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package Estrilo
 * @subpackage controllers
 */

/**
 * Painel
 *
 * @property CI_Loader              $load
 * @property CI_Input               $input
 * @property CI_Session             $session
 */
class Painel extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['titulo_pagina'] = 'Configurações do sistema';
        $this->data['view'] = 'config/painel/index';
        $this->data['menu'] = 'config/painel/menus/index';

        $this->data['javascript'] = array(
            'config/painel/painel'
        );

        $this->load->view('index', $this->data);
    }
}

/* End of file painel.php */
/* Location: ./application/controllers/config/painel.php */