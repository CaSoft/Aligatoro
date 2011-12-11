<?php
/**
 * clientes_model.php
 *
 * Model Clientes
 *
 * @author      Evaldo Junior <junior@casoft.info>
 * @package     Estrilo
 * @subpackage  models
 * @property    CI_DB_active_record     $db
 */

class Clientes_model extends CI_Model {

    /**
     * Função construtora
     */
    public function  __construct() {
        parent::__construct();
    }

    /**
     * Função para gravar os dados de um clientes.
     *
     * @param array $cliente Dados do cliente a ser cadastrado no banco
     * @return integer
     */
    public function gravar($cliente) {
        if ($cliente['id'] == '0') {
            $cliente['datahora'] = date('Y-m-d h:j:s');
            $this->db->insert('clientes', $cliente);
            $cliente['id'] = $this->db->insert_id();
        }
        else {
            $this->db->where('id', $cliente['id']);
            $this->db->update('clientes', $cliente);
        }

        return $cliente['id'];
    }

    /**
     * Função que remove um cliente do banco de dados.
     *
     * @param integer $cliente_id
     * @return boolean
     */
    public function remover($cliente_id) {
        if (is_an_integer($cliente_id)) {
            $this->db->where('id', $cliente_id);
            $this->db->delete('clientes');

            return TRUE;
        }
        return FALSE;
    }

    /**
     * Função para pesquisaer clientes
     *
     * @param string $campo
     * @param string $valor
     * @return array
     */
    public function pesquisar_clientes($campo, $valor, $pagina, $registros_por_pagina) {
        if ($campo == 'telefone') {
            $this->db->like('telefone1', $valor);
            $this->db->or_like('telefone2', $valor);
        }
        else {
            $this->db->like($campo, $valor);
        }

        $this->db->limit($registros_por_pagina, $pagina);

        $query = $this->db->get('clientes');

        return $query->result_array();
    }

    /**
     * Esta função pega os dados de um cliente
     *
     * @param integer $id
     * @return array
     */
    public function pegar_cliente($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('clientes');

        return $query->row_array();
    }

    /**
     * Esta função retorna os últimos clientes cadastrados
     *
     * @param integer $numero Número de cadastros a retornar
     * @return array
     */
    public function pegar_ultimos_cadastrados($numero) {
        $this->db->limit($numero);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('clientes');

        return $query->result_array();
    }

    /**
     * Função que pega os registros dos clientes de forma paginada.
     *
     * @param integer $pagina
     * @param integer $quantidade
     * @access public
     * @return array
     */
    public function pegar_paginacao($pagina, $quantidade)
    {
        $this->db->order_by('nome');
        $this->db->limit($quantidade, $pagina);
        $query = $this->db->get('clientes');

        return $query->result_array();
    }

    /**
     * pegar_quantidade_clientes
     *
     * Pega a quantidade total de clientes.
     *
     * @access public
     * @return void
     */
    public function pegar_quantidade_clientes() {
        return $this->db->count_all_results('clientes');
    }

    /**
     * pegar_quantidade_clientes_pesquisa
     *
     * Conta a quantidade de registros em uma pesquisa.
     *
     * @param mixed $campo
     * @param mixed $valor
     * @access public
     * @return void
     */
    public function pegar_quantidade_clientes_pesquisa($campo, $valor) {
        $this->db->like($campo, $valor);
        return $this->db->count_all_results('clientes');
    }
}

/* End of file clientes_model.php */
/* Location: ./application/models/clientes_model.php */
