<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destineja extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$dados['titulo'] = "Destine Já - Início";
		$this->load->view('inicio', $dados);
	}

	public function gerador(){
		$dados['titulo'] = "Destine Já - Cadastro";
		$this->load->view('gerador', $dados);
	}

	public function coletor(){
		$dados['titulo'] = "Destine Já - Cadastro";
		$this->load->view('coletor', $dados);
	}

}
