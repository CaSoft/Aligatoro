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

    /**
     * index
     *
     * Exibe a lista de referências com opções para cadastrar uma nova, editar e remover
     * 
     * @access public
     * @return void
     */
    public function index() {
        $this->data['titulo_pagina'] = 'Gestão de referências/indicações';
        $this->data['view'] = 'config/referencias/index';
        $this->data['menu'] = 'config/referencias/menus/index';

        $this->data['javascript'] = array(
            'config/referencias/index'
        );

        $this->load->model('referencias_model');
        $this->data['referencias'] = $this->referencias_model->pegar_referencias();

        $this->load->view('index.php', $this->data);
    }

    public function novo() {
        $this->data['titulo_pagina'] = 'Adição de referência/indicação';
        $this->data['view'] = 'config/referencias/formulario';
        $this->data['menu'] = 'config/referencias/menus/formulario';

        $this->data['javascript'] = array(
            'config/referencias/form'
        );

        $this->data['referencia'] = array(
            'id'    => 0,
            'nome'  => '',
            'ativo' => 1
        );

        $this->load->view('index.php', $this->data);      
    }
}

/* End of file referencias.php */
/* Location: ./application/controllers/referencias.php */
