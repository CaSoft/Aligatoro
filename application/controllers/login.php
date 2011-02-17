<?php
/**
 * login.php
 *
 * Controller para fazer login no sistema
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package Aligatoro
 * @subpackage controllers
 */

/**
 * Login
 *
 * @property CI_Loader          $load
 * @property CI_Input           $input
 * @property CI_Session         $session
 * @property Firephp            $firephp
 * @property Usuarios_model     $usuarios_model
 */
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('firephp');
    }

    /**
     * Exibe a página de login
     */
    public function index() {
        $usuario = $this->session->userdata('usuario');
        if (isset($usuario['id'])) {
            redirect(site_url().'painel');
        }

        $data = array();
        
        $data['falha_login'] = false;

        if ($this->input->post('login') && $this->input->post('senha')) {
            $this->load->model('usuarios_model');
            if ($this->usuarios_model->autenticar($this->input->post('login'), $this->input->post('senha'))) {
                // Login funcionou
                $sessao = $this->usuarios_model->pegar_dados_sessao($this->input->post('login'));

                $this->session->set_userdata('usuario', $sessao);

                redirect(site_url().'painel');
            }
            else {
                // Login não funcionou
                $data['falha_login'] = true;
            }
        }

        $this->load->view('login', $data);
    }

    public function logout() {
        $this->session->unset_userdata('usuario');

        redirect(site_url().'login');
    }
}

/* End of file arquivo.php */
/* Location: ./system/application/controllers/arquivo.php */
