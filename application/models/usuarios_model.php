<?php
/**
 * usuarios_model.php
 *
 * Model dos usuários do sistema
 *
 * @author      Evaldo Junior <junior@casoft.info>
 * @package     Aligatoro
 * @subpackage  models
 * @property    CI_DB_active_record     $db
 */

class Usuarios_model extends CI_Model {

    /**
     * Função construtora
     */

    public function  __construct() {
        parent::__construct();
    }

    /**
     * Função para autenticar usuários no sistema
     *
     * @param string $login
     * @param string $senha
     * @return boolean
     */
    public function autenticar($login, $senha) {
        $this->db->where('login', $login);
        $this->db->where('senha', md5($senha));

        if ($this->db->count_all_results('usuarios') == 1) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Esta função retorna os dados que ficarão gravados na sessão do usuário
     *
     * @param string $login
     * @return array
     */
    public function pegar_dados_sessao($login) {
        $this->db->select('id, nome');
        $this->db->from('usuarios');
        $this->db->where('login', $login);

        $query = $this->db->get();

        return $query->row_array();
    }
}

/* End of file usuarios_model.php */
/* Location: ./application/models/usuarios_model.php */