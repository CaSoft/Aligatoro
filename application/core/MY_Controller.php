<?php
/**
 * MY_Controller.php
 *
 * Descrição
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package
 * @subpackage controllers
 */

/**
 * Classe
 *
 * @property CI_Loader  $load
 * @property CI_Input   $input
 * @property CI_Session $session
 */
class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if (! $this->session->userdata('usuario')) {
            redirect(site_url().'login');
        }
    }
}

/* End of file arquivo.php */
/* Location: ./system/application/controllers/arquivo.php */
