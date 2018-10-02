<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rpm extends CI_Controller {
	 
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Cadastro');
    }

	public function index()
	{
		$this->load->view('cadastro');
	}
	public function cadastro()
	{	
		 $nome = $this->input->post('txtNome');
         $email = $this->input->post('txtEmail');
		 $senha = $this->input->post('txtSenha');
		 $telefone = $this->input->post('txtTelefone');
		 $rg = $this->input->post('txtRg');
		 $cep = $this->input->post('txtCep');
		 $logradouro = $this->input->post('txtLogradouro');
		 $numero = $this->input->post('txtNumero');
		 $complemento = $this->input->post('txtComplemento');
		 $bairro = $this->input->post('txtBairro');
		 $cidade = $this->input->post('txtCidade');
		 $estado = $this->input->post('txtEstado');
		 
         $check= $this->input->post('btnConfirmar');
		 // Load url helper
		 $this->load->helper('url');
		if  ($check=="") 
		{	
			$this->load->view('cadastro');
		}
		if  ($check=="C") 
		{
			 $this->Cadastro->nome = $nome;
			 $this->Cadastro->email =$email;
			 $this->Cadastro->senha = $senha;
			 $this->Cadastro->telefone = $telefone;
			 $this->Cadastro->rg = $rg;
			 $this->Cadastro->cep = $cep;
			 $this->Cadastro->logradouro = $logradouro;
			 $this->Cadastro->numero = $numero;
			 $this->Cadastro->complemento = $complemento;
			 $this->Cadastro->bairro = $bairro;
			 $this->Cadastro->cidade = $cidade;
			 $this->Cadastro->estado = $estado;
			 $this->Cadastro->setNovoCadastro();
			 $this->load->view('cadastro', 'sucesso');
		}		
	}
}
