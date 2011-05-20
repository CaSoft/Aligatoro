<?php
/**
 * paginas.php
 *
 * Controller com algumas páginas do sistema.
 * Essas páginas podem não ter ligação com as demais, dos módulos.
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package     Estrilo
 * @subpackage  controllers
 */

/**
 * paginas
 *
 * @property CI_Loader  $load
 * @property CI_Input   $input
 */
class Paginas extends MY_Controller { 

    /**
     * Função construtora
     */
    public function  __construct() { 
        parent::__construct();
    }

    /**
     * nao_encontrada
     *
     * Esta função exibe a página de erro 404
     * 
     * @access public
     * @return void
     */
    public function nao_encontrada() {
        $this->data['titulo_pagina'] = 'Página não encontrada';
        $this->data['view'] = 'nao_encontrada';

        $this->load->view('index', $this->data);
    }
}

/* End of file paginas.php */
/* Location: ./application/controllers/paginas.php */

