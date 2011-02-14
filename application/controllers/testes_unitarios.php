<?php
/**
 * testes_unitarios.php
 *
 * Arquivo com os testes unitários do sistema
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package Aligatoro
 * @subpackage controllers
 */

/**
 * Testes_unitarios
 *
 * @property CI_Loader      $load
 * @property CI_Input       $input
 * @property CI_Unit_test   $unit
 * @property Usuarios_model $usuarios_model
 * @property Clientes_model $clientes_model
 */
class Testes_unitarios extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->library('unit_test');
        $this->unit->use_strict(TRUE);

        // Iniciando os testes da model Usuarios_model
        $this->load->model('usuarios_model');

        $this->unit->run($this->usuarios_model->autenticar('admin', '123456'), true, 'Autenticacao Valida');
        $this->unit->run($this->usuarios_model->autenticar('admin', '123457'), false, 'Autenticacao Invalida');
        
        $usuario_retorno = $this->usuarios_model->pegar_dados_sessao('admin');
        $usuario_teste = array(
            'id'    => '1',
            'nome'  => 'Administrador'
        );
        
        $this->unit->run($usuario_retorno, $usuario_teste, 'Dados de Sessao');

        unset($usuario);

        // Fim dos testes da model Usuarios_model

        // Iniciando os testes da model Clientes_model
        $this->load->model('clientes_model');

        $cliente = $this->clientes_model->pegar_ultimos_cadastrados(1);

        $this->unit->run(count($cliente), 1, 'Retornar ultimo cliente cadastrado');

        $clientes = $this->clientes_model->pegar_ultimos_cadastrados(2);

        $this->unit->run(count($clientes), 2, 'Retornar dois ultimos clientes cadastrados');

        $cliente = $this->clientes_model->pegar_cliente(1); // Teste com a cliente Maria das Dores

        $this->unit->run($cliente['nome'], 'Maria das Dores', 'Retornar um cliente específico');

        unset($cliente, $clientes);

        // Fim dos testes da model Clientes_model

        echo $this->unit->report();
    }
}

/* End of file testes_unitarios.php */
/* Location: ./application/controllers/testes_unitarios.php */
