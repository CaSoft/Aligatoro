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
 * @property CI_Loader              $load
 * @property CI_Input               $input
 * @property CI_Session             $session
 * @property Clientes_model         $clientes_model
 */
class Clientes extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['titulo_pagina'] = 'Controle de clientes';
        $this->data['view'] = 'clientes/index';
        $this->data['menu'] = 'clientes/menus/index';

        $this->load->model('clientes_model');

        if ($this->input->post('texto_pesquisa_clientes')) {
            $this->data['texto_pesquisa_clientes'] = $this->input->post('texto_pesquisa_clientes');
            $this->data['clientes'] = $this->clientes_model->pesquisar_clientes($this->input->post('tipo_pesquisa_clientes'), $this->input->post('texto_pesquisa_clientes'));
        }
        else {
            $this->data['texto_pesquisa_clientes'] = '';
            $this->data['clientes'] = $this->clientes_model->pegar_ultimos_cadastrados(10);
        }

        $this->load->view('index', $this->data);
    }

    public function novo() {
        $this->data['titulo_pagina'] = 'Cadastro de cliente';
        $this->data['view'] = 'clientes/formulario';
        $this->data['menu'] = 'clientes/menus/formulario';

        $this->data['javascript'] = array(
            'clientes/formulario'
        );

        $this->load->view('index', $this->data);
    }

    public function gravar() {
        $cliente = $this->_pegar_dados_cliente_post();

        $this->load->model('clientes_model');

        $this->clientes_model->gravar($cliente);

        $this->session->set_flashdata(array(
            'informativo' => 'Cliente adicionado com sucesso!'
        ));

        redirect(site_url().'clientes');
    }

    private function _pegar_dados_cliente_post() {
        $cliente = array(
            'id'            => $this->input->post('id'),
            'nome'          => $this->input->post('nome'),
            'telefone1'     => $this->input->post('telefone1'),
            'email'         => $this->input->post('email'),
            'contato'       => $this->input->post('contato'),
            'telefone2'     => $this->input->post('telefone2'),
            'celular'       => $this->input->post('celular'),
            'logradouro'    => $this->input->post('logradouro'),
            'numero'        => $this->input->post('numero'),
            'complemento'   => $this->input->post('complemento'),
            'bairro'        => $this->input->post('bairro'),
            'cidade'        => $this->input->post('cidade'),
            'estado'        => $this->input->post('estado'),
            'cep'           => $this->input->post('cep'),
            'razao_social'  => $this->input->post('razao_social'),
            'cpf'           => $this->input->post('cpf'),
            'cnpj'          => $this->input->post('cnpj'),
            'documento'     => $this->input->post('documento')
        );
        return $cliente;
    }
}

/* End of file clientes.php */
/* Location: ./application/controllers/clientes.php */
