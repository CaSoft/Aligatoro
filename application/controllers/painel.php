<?php
/**
 * painel.php
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
 */
class Painel extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('index');
    }
}

/* End of file arquivo.php */
/* Location: ./system/application/controllers/arquivo.php */
