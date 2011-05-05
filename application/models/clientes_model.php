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
     * Função para pesquisaer clientes
     *
     * @param string $campo
     * @param string $valor
     * @return array
     */
    public function pesquisar_clientes($campo, $valor) {
        if ($campo == 'telefone') {
            $this->db->like('telefone1', $valor);
            $this->db->or_like('telefone2', $valor);
        }
        else {
            $this->db->like($campo, $valor);
        }
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
}

/* End of file clientes_model.php */
/* Location: ./application/models/clientes_model.php */
