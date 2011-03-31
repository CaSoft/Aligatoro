<?php
/**
 * Usuarios.php
 *
 * Controller para tratar dos usuários do sistema.
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package Aligatoro
 * @subpackage controllers
 */

/**
 * usuarios
 *
 * @property CI_Loader              $load
 * @property CI_Input               $input
 * @property CI_Session             $session
 */
class Usuarios extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['titulo_pagina'] = 'Gestão de usuários';
        $this->data['view'] = 'config/usuarios/index';
        $this->data['menu'] = 'config/usuarios/menus/index';

        $this->data['javascript'] = array(
            'config/usuarios/usuarios'
        );

        $this->load->model('usuarios_model');

        if ($this->input->post('texto_pesquisa_usuarios')) {
            $this->data['texto_pesquisa_usuarios'] = $this->input->post('texto_pesquisa_usuarios');
            $this->data['usuarios'] = $this->usuarios_model->pesquisar_usuarios($this->input->post('tipo_pesquisa_usuarios'), $this->input->post('texto_pesquisa_usuarios'));
        }
        else {
            $this->data['texto_pesquisa_usuarios'] = '';
            $this->data['usuarios'] = $this->usuarios_model->pegar_ultimos_cadastrados(10);
        }

        $this->load->view('index', $this->data);
    }

    public function novo() {
        $this->data['titulo_pagina'] = 'Cadastro de usuário';
        $this->data['view'] = 'config/usuarios/formulario';
        $this->data['menu'] = 'config/usuarios/menus/formulario';

        $this->data['javascript'] = array(
            'config/usuarios/formulario'
        );

        $this->data['usuario'] = $this->_usuario_vazio();

        $this->load->view('index', $this->data);
    }

    /**
     * Esta função retorna um array com dados vazios para um novo usuário
     *
     * @return array
     */
    private function _usuario_vazio() {
        $usuario = array(
            'id'        => '0',
            'login'     => '',
            'nome'      => '',
            'email'     => '',
            'ativo'     => '1'
        );
        return $usuario;
    }
}

/* End of file usuarios.php */
/* Location: ./application/controllers/config/usuarios.php */