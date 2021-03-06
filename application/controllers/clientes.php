<?php
/**
 * clientes.php
 *
 * Controller dos clientes
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package Estrilo
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
class Clientes extends MY_Controller {
    public function __construct() {
        parent::__construct();

        $this->data['menu_ativo'] = 'clientes';
    }

    /**
     * index
     *
     * Indeice dos clientes. Tem paginação.
     *
     * @param string $campo
     * @param string $valor
     * @param int $pagina
     * @access public
     * @return void
     */
    public function index($campo = '_', $valor = '_', $pagina = 0) {

        $campo = urldecode($campo);
        $valor = urldecode($valor);

        $this->data['titulo_pagina']    = 'Controle de clientes';
        $this->data['view']             = 'clientes/index';
        $this->data['menu']             = 'clientes/menus/index';
        $registros_por_pagina           = 2;

        $this->data['javascript'] = array(
            'clientes/index'
        );

        $this->load->model('clientes_model');

        $campo_pesquisa = ($this->input->post('tipo_pesquisa_clientes')) ?
            $this->input->post('tipo_pesquisa_clientes') :
            $campo;
        $valor_pesquisa = ($this->input->post('texto_pesquisa_clientes')) ?
            $this->input->post('texto_pesquisa_clientes') :
            $valor;

        if ($campo_pesquisa != '_') {
            // Deve pesquisar
            $this->data['texto_pesquisa_clientes'] = $valor_pesquisa;
            $this->data['clientes'] = $this->clientes_model->pesquisar_clientes(
                $campo_pesquisa,
                $valor_pesquisa,
                $pagina,
                $registros_por_pagina
            );
            $total_clientes = $this->clientes_model->pegar_quantidade_clientes_pesquisa(
                $campo_pesquisa,
                $valor_pesquisa
            );
        }
        else {
            $this->data['texto_pesquisa_clientes'] = '';
            $this->data['clientes'] = $this->clientes_model->pegar_paginacao($pagina, $registros_por_pagina);
            $total_clientes = $this->clientes_model->pegar_quantidade_clientes();
        }

        $campo_pesquisa = urlencode($campo_pesquisa);
        $valor_pesquisa = urlencode($valor_pesquisa);

        $this->load->library('pagination');
        $this->pagination->initialize(array(
            'base_url'      => site_url()."clientes/index/{$campo_pesquisa}/{$valor_pesquisa}/",
            'per_page'      => $registros_por_pagina,
            'total_rows'    => $total_clientes,
            'uri_segment'   => 5
        ));

        $this->data['paginacao'] = $this->pagination->create_links();

        $this->load->view('index', $this->data);
    }

    /**
     * Exibe o formulário para cadastro de novo clientes
     */
    public function novo() {
        $this->data['titulo_pagina'] = 'Cadastro de cliente';
        $this->data['view'] = 'clientes/formulario';
        $this->data['menu'] = 'clientes/menus/formulario';

        $this->data['javascript'] = array(
            'tinymce/jscripts/tiny_mce/jquery.tinymce',
            'clientes/formulario',
            'clientes/dados'
        );

        $this->data['cliente'] = $this->_cliente_vazio();

        $this->load->view('index', $this->data);
    }

    /**
     * Esta função exibe os dados do cliente
     *
     * @param integer $cliente_id
     */
    public function dados($cliente_id) {
        $this->data['titulo_pagina'] = 'Dados do cliente';
        $this->data['view'] = 'clientes/dados';
        $this->data['menu'] = 'clientes/menus/dados';

        $this->data['javascript'] = array(
            'clientes/dados'
        );

        $this->load->model('clientes_model');
        $this->data['cliente'] = $this->clientes_model->pegar_cliente($cliente_id);

        $this->load->view('index', $this->data);
    }

    /**
     * Esta função exibe os dados do cliente para impressao
     *
     * @param integer $cliente_id
     */
    public function impressao($cliente_id) {
        $this->data['titulo_pagina'] = 'Dados do cliente';
        $this->data['view'] = 'clientes/impressao';

        $this->load->model('clientes_model');
        $this->data['cliente'] = $this->clientes_model->pegar_cliente($cliente_id);

        $this->load->view('impressao', $this->data);
    }

    public function editar($cliente_id) {
        $this->data['titulo_pagina'] = 'Edição de cadastro de cliente';
        $this->data['view'] = 'clientes/formulario';
        $this->data['menu'] = 'clientes/menus/formulario';

        $this->data['javascript'] = array(
            'tinymce/jscripts/tiny_mce/jquery.tinymce',
            'clientes/formulario',
            'clientes/dados'
        );

        $this->load->model('clientes_model');
        $this->data['cliente'] = $this->clientes_model->pegar_cliente($cliente_id);

        $this->load->view('index', $this->data);
    }

    /**
     * Função que grava os dados do cliente
     *
     * Após a gravação o usuário é redirecionado para a página dos dados do
     * cliente.
     */
    public function gravar() {
        $cliente = $this->_pegar_dados_cliente_post();

        $this->load->model('clientes_model');

        $cliente['id'] = $this->clientes_model->gravar($cliente);

        if ($this->input->post('id') != '0') {
            $this->session->set_flashdata(array(
                'informativo' => 'Cliente atualizado com sucesso!',
                'informativo_classe' => 'sucesso'
            ));
        }
        else {
            $this->session->set_flashdata(array(
                'informativo' => 'Cliente adicionado com sucesso!',
                'informativo_classe' => 'sucesso'
            ));
        }

        redirect(site_url().'clientes/dados/'.$cliente['id']);
    }

    /**
     * Função para remover um cliente
     *
     * @param integer $cliente_id
     */
    public function remover($cliente_id) {
        if (is_an_integer($cliente_id)) {
            $this->load->model('clientes_model');

            if ($this->clientes_model->remover($cliente_id)) {
                $this->session->set_flashdata(array(
                    'informativo' => 'Cliente removido com sucesso!',
                    'informativo_classe' => 'sucesso'
                ));
            }
            else {
                $this->session->set_flashdata(array(
                    'informativo' => 'Erro ao remover cliente!',
                    'informativo_classe' => 'erro'
                ));
            }
        }
        redirect(site_url().'clientes');
    }

    /**
     * Função que pega os dados do clientes enviados via POST
     *
     * @return array
     */
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
            'documento'     => $this->input->post('documento'),
            'observacoes'   => $this->input->post('observacoes')
        );
        return $cliente;
    }

    /**
     * Esta função retorna um array com dados vazios para um cliente
     *
     * @return array
     */
    private function _cliente_vazio() {
        $cliente = array(
            'id'            => '0',
            'nome'          => '',
            'telefone1'     => '',
            'email'         => '',
            'contato'       => '',
            'telefone2'     => '',
            'celular'       => '',
            'logradouro'    => '',
            'numero'        => '',
            'complemento'   => '',
            'bairro'        => '',
            'cidade'        => '',
            'estado'        => '',
            'cep'           => '',
            'razao_social'  => '',
            'cpf'           => '',
            'cnpj'          => '',
            'documento'     => '',
            'observacoes'   => ''
        );
        return $cliente;
    }
}

/* End of file clientes.php */
/* Location: ./application/controllers/clientes.php */
