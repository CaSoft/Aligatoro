<?php
/**
 * Usuarios.php
 *
 * Controller para tratar dos usuários do sistema.
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package Estrilo
 * @subpackage controllers
 */

/**
 * usuarios
 *
 * @property CI_Loader              $load
 * @property CI_Input               $input
 * @property CI_Session             $session
 * @property Usuarios_model         $usuarios_model
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

    /**
     * Esta função exibe os dados do usuário
     *
     * @param integer $usuario_id
     */
    public function dados($usuario_id) {
        $this->data['titulo_pagina'] = 'Dados do usuário';
        $this->data['view'] = 'config/usuarios/dados';
        $this->data['menu'] = 'config/usuarios/menus/dados';

        $this->load->model('usuarios_model');
        $this->data['usuario'] = $this->usuarios_model->pegar_usuario($usuario_id);

        $this->load->view('index', $this->data);
    }

    public function editar($usuario_id) {
        $this->data['titulo_pagina'] = 'Edição de cadastro de usuário';
        $this->data['view'] = 'config/usuarios/formulario';
        $this->data['menu'] = 'config/usuarios/menus/formulario';

        $this->data['javascript'] = array(
            'models/usuarios_model',    // As models devem vir antes!
            'config/usuarios/formulario'
        );

        $this->load->model('usuarios_model');
        $this->data['usuario'] = $this->usuarios_model->pegar_usuario($usuario_id);

        $this->load->view('index', $this->data);
    }

    public function novo() {
        $this->data['titulo_pagina'] = 'Cadastro de usuário';
        $this->data['view'] = 'config/usuarios/formulario';
        $this->data['menu'] = 'config/usuarios/menus/formulario';

        $this->data['javascript'] = array(
            'models/usuarios_model',    // As models devem vir antes!
            'config/usuarios/formulario'
        );

        $this->data['usuario'] = $this->_usuario_vazio();

        $this->load->view('index', $this->data);
    }
    
    /**
     * Função que grava os dados do usuário
     *
     * Após a gravação o usuário é redirecionado para a página dos dados do
     * usuário.
     */
    public function gravar() {
        $usuario = $this->_pegar_dados_usuario_post();

        $this->load->model('usuarios_model');

        $usuario['id'] = $this->usuarios_model->gravar($usuario);

        if ($this->input->post('id') != '0') {
            $this->session->set_flashdata(array(
                'informativo' => 'Usuário atualizado com sucesso!',
                'informativo_classe' => 'sucesso'
            ));
        }
        else {
            $this->session->set_flashdata(array(
                'informativo' => 'Usuário adicionado com sucesso!',
                'informativo_classe' => 'sucesso'
            ));
        }

        redirect(site_url().'config/usuarios/dados/'.$usuario['id']);
    }

    /**
     * Função que pega os dados do usuário enviados via POST
     *
     * @return array
     */
    private function _pegar_dados_usuario_post() {
        $usuario = array(
            'id'        => $this->input->post('id'),
            'login'     => $this->input->post('login'),
            'nome'      => $this->input->post('nome'),
            'email'     => $this->input->post('email')
        );

        if ($this->input->post('ativo')) {
            $usuario['ativo'] = '1';
        }

        if ($this->input->post('senha')) {
            $usuario['senha'] = md5($this->input->post('senha'));
        }

        return $usuario;
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