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
        
    }
}
                                       
/* End of file referencias_model.php */
/* Location: ./application/models/referencias_model.php */
