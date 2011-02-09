<?php
/**
 * clientes_model.php
 *
 * Model Clientes
 *
 * @author      Evaldo Junior <junior@casoft.info>
 * @package     aligatoro
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
     */
    public function gravar($cliente) {
        $this->db->insert('clientes', $cliente);
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
}

/* End of file clientes_model.php */
/* Location: ./application/models/clientes_model.php */
