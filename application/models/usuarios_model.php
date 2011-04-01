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
        $this->db->where('ativo', '1');

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

    /**
     * Função para gravar/atualizar os dados de um usuário.
     *
     * @param array $usuario Dados do usuário a ser cadastrado no banco
     * @return integer
     */
    public function gravar($usuario) {
        if ($usuario['id'] == '0') {
            $usuario['datahora'] = date('Y-m-d h:j:s');
            $this->db->insert('usuarios', $usuario);
            $usuario['id'] = $this->db->insert_id();
        }
        else {
            $this->db->where('id', $usuario['id']);
            $this->db->update('usuarios', $usuario);
        }

        return $usuario['id'];
    }

    /**
     * Função para pesquisar usuários
     *
     * @param string $campo
     * @param string $valor
     * @return array
     */
    public function pesquisar_usuarios($campo, $valor) {
        $this->db->like($campo, $valor);
        $query = $this->db->get('usuarios');

        return $query->result_array();
    }

    /**
     * Esta função pega os dados de um usuario
     *
     * @param integer $id
     * @return array
     */
    public function pegar_usuario($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('usuarios');

        return $query->row_array();
    }

    /**
     * Esta função retorna os últimos usuários cadastrados
     *
     * @param integer $numero Número de cadastros a retornar
     * @return array
     */
    public function pegar_ultimos_cadastrados($numero) {
        $this->db->limit($numero);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('usuarios');

        return $query->result_array();
    }
}

/* End of file usuarios_model.php */
/* Location: ./application/models/usuarios_model.php */