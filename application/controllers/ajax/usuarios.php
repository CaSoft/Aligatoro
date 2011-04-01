<?php
/**
 * Usuarios.php
 *
 * Controller para tratar requisições Ajax sobre os usuários do sistema.
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package Aligatoro
 * @subpackage controllers
 */

/**
 * usuarios
 *
 * @property CI_Loader              $load
 * @property CI_Input               $input
 * @property CI_Session             $session
 * @property Usuarios_model         $usuarios_model
 */
class Usuarios extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    /**
     * Esta função verifica se um login já existe no sistema.
     */
    public function verificar_login() {
        if ($this->input->post('login')) {
            $this->load->model('usuarios_model');
            if ($this->usuarios_model->verificar_login($this->input->post('login'))) {
                echo '1'; // Login existe no sistema;
            }
            else {
                echo '0'; // Login não existe no sistema;
            }
        }
    }
}

/* End of file usuarios.php */
/* Location: ./application/controllers/ajax/usuarios.php */