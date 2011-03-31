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

    /**
     * Array que contém as informações que serão enviadas para as views
     *
     * @var array
     */
    public $data;

    public function __construct() {
        parent::__construct();

        if (! $this->session->userdata('usuario')) {
            redirect(site_url().'login');
        }

        $this->data = array();

        $this->data['usuario'] = $this->session->userdata('usuario');

        $dias_semana = array(
            0 => 'Domingo',
            1 => 'Segunda-feira',
            2 => 'Terça-feira',
            3 => 'Quarta-feira',
            4 => 'Quinta-feira',
            5 => 'Sexta-feira',
            6 => 'Sábado',
        );

        $meses = array(
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro',
        );

        $mes = date('m') + 0; // Meio gambiarra para pegar sem o 0...

        $this->data['data_topo'] = $dias_semana[date('w')].', '.date('d').' de '.$meses[$mes].' de '.date('Y');
    }
}

/* End of file arquivo.php */
/* Location: ./system/application/controllers/arquivo.php */
