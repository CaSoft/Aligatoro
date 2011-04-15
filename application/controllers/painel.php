<?php
/**
 * painel.php
 *
 * Descrição
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package
 * @subpackage controllers
 */

/**
 * Classe
 *
 * @property CI_Loader          $load
 * @property CI_Input           $input
 * @property Usuarios_model     $usuarios_model
 */
class Painel extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['titulo_pagina'] = 'Painel';
        $this->data['view'] = 'painel/index';
        $this->data['menu'] = 'painel/menus/index';

        $this->load->view('index', $this->data);
    }

    /**
     * Exibindo os dados do usuário autenticado
     */
    public function meus_dados() {
        $this->data['titulo_pagina'] = 'Meus dados';
        $this->data['view'] = 'painel/meus_dados';
        $this->data['menu'] = 'painel/menus/meus_dados';

        $this->data['javascript'] = array(
            'models/usuarios_model',
            'painel/meus_dados'
        );

        $this->load->model('usuarios_model');
        $this->data['dados_usuario'] = $this->usuarios_model->pegar_usuario($this->data['usuario']['id']);

        $this->load->view('index', $this->data);
    }

    /**
     * Função para alterar os dados de um usuário
     */
    public function gravar_meus_dados() {
        $usuario = $this->_pegar_meus_dados_post();

        $usuario['id'] = $this->data['usuario']['id'];

        $this->load->model('usuarios_model');
        $this->usuarios_model->gravar($usuario);

        // Reiniciando a sessão do usuário
        $sessao = $this->usuarios_model->pegar_dados_sessao($this->input->post('login'));
        $this->session->unset_userdata('usuario');
        $this->session->set_userdata('usuario', $sessao);

        $this->session->set_flashdata(array(
            'informativo' => 'Dados do usuário atualizados!',
            'informativo_classe' => 'sucesso'
        ));

        redirect(site_url());
    }

    /**
     * Função que pega os dados do usuário enviados via POST
     *
     * @return array
     */
    private function _pegar_meus_dados_post() {
        $usuario = array(
            'nome'      => $this->input->post('nome'),
            'email'     => $this->input->post('email')
        );

        if ($this->input->post('nova_senha')) {
            $usuario['senha'] = md5($this->input->post('nova_senha'));
        }

        return $usuario;
    }
}

/* End of file arquivo.php */
/* Location: ./system/application/controllers/arquivo.php */
