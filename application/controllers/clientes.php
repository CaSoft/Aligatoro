<?php
/**
 * clientes.php
 *
 * Controller dos clientes
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package
 * @subpackage controllers
 */

/**
 * Clientes
 *
 * @property CI_Loader  $load
 * @property CI_Input   $input
 */
class Clientes extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['titulo_pagina'] = 'Controle de clientes';
        $this->data['view'] = 'clientes/index';
        $this->data['menu'] = 'clientes/menus/index';

        $this->load->view('index', $this->data);
    }

    public function novo() {
        $this->data['titulo_pagina'] = 'Cadastro de cliente';
        $this->data['view'] = 'clientes/formulario';
        $this->data['menu'] = 'clientes/menus/formulario';

        $this->load->view('index', $this->data);
    }
}

/* End of file clientes.php */
/* Location: ./application/controllers/clientes.php */
