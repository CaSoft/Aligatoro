<?php
/**
 * referencias_model.php
 *
 * Model referencias_model
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @package
 * @subpackage  models
 */

/**
 * referencias_model
 *
 * @property    CI_DB_active_record     $db
 */
class Referencias_model extends CI_Model { 
    
    /**
     * Método construtor
     */
    public function  __construct() { 
        parent::__construct();
    }

    /**
     * pegar_referencia
     *
     * Pega uma referência pelo ID
     * 
     * @param integer $referencia_id
     * @access public
     * @return array
     */
    public function pegar_referencia($referencia_id) {
        $this->db->where('id', $referencia_id);
        $query = $this->db->get('referencias');

        return $query->row_array();
    }

    /**
     * pegar_referencias
     *
     * Pega todas as referências cadastradas
     * 
     * @access public
     * @return array
     */
    public function pegar_referencias() {
        $query = $this->db->get('referencias');

        return $query->result_array();
    }

    /**
     * pegar_referencias_ativas
     *
     * Pegar somente as referências ativas
     * 
     * @access public
     * @return array
     */
    public function pegar_referencias_ativas() {
        $this->db->where('ativo', 1);
        $query = $this->db->get('referencias');

        return $query->result_array();       
    }

    /**
     * gravar
     *
     * Insere uma nova referência ou atualiza uma existente
     * 
     * @param   array   $referencia
     * @access public
     * @return integer  O ID da referência
     */
    public function gravar($referencia) {
        $atualiza = FALSE;
        if (isset($referencia['id'])) {
            if ($referencia['id'] > 0) {
                $atualiza = TRUE;
            }
        }

        if ($atualiza) {
            $this->db->where('id', $referencia['id']);
            $this->db->update('referencias', $referencia);
        }
        else {
            unset($referencia['id']); // Garantindo que não existe o indice ID
            $this->db->insert('referencias', $referencia);

            $referencia['id'] = $this->db->insert_id();
        }

        return $referencia['id'];
    }

    /**
     * remover
     *
     * Remove uma referência pelo ID
     * 
     * @param integer $referencia_id 
     * @access public
     * @return boolean
     */
    public function remover($referencia_id) {
        $this->db->where('id', $referencia_id);
        $this->db->delete('referencias');

        return TRUE;
    }
}
                                       
/* End of file referencias_model.php */
/* Location: ./application/models/referencias_model.php */
