<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('componentes/header');
		$this->load->view('componentes/sidebar');
		$this->load->view('area_admin');
		$this->load->view('componentes/footer');
	}

// public function listar_autores(){
// 		$dados['usuario'] = $this->usuario->get();
// 		$this->load->view('componentes/header',$dados);
// 		$this->load->view('componentes/sidebar');
// 		$this->load->view('usuario_listar',$dados);
// 		$this->load->view('componentes/footer');
// 	}


	public function usuario_cadastrar(){
		$dados['usuario'] = $this->usuario->get();
		$this->load->view('componentes/header',$dados);
		$this->load->view('componentes/sidebar');
		$this->load->view('usuario_cadastrar',$dados);
		$this->load->view('componentes/footer');
	}


	public function usuario_listar(){
		$dados['usuario'] = $this->usuario->get();
		$this->load->view('componentes/header',$dados);
		$this->load->view('componentes/sidebar');
		$this->load->view('usuario_listar',$dados);
		$this->load->view('componentes/footer');
	}

	// a parte de cima tá ok// 

		public function livro_listar(){
		$dados['livro'] = $this->usuario->get();
		$this->load->view('componentes/header',$dados);
		$this->load->view('componentes/sidebar');
		$this->load->view('livro_listar',$dados);
		$this->load->view('componentes/footer');
	}

public function livro_excluir(){
		$dados['livro'] = $this->usuario->get();
		$this->load->view('componentes/header',$dados);
		$this->load->view('componentes/sidebar');
		$this->load->view('livro_excluir',$dados);
		$this->load->view('componentes/footer');
	}

	public function livro_salvar(){
		$dados['livro'] = $this->usuario->get();
		$this->load->view('componentes/header',$dados);
		$this->load->view('componentes/sidebar');
		$this->load->view('livro_salvar',$dados);
		$this->load->view('componentes/footer');
	}

	public function livro_novo(){
		$dados['livro'] = $this->usuario->get();
		$this->load->view('componentes/header',$dados);
		$this->load->view('componentes/sidebar');
		$this->load->view('livro_novo',$dados);
		$this->load->view('componentes/footer');
	}

	
	//public function obra_novo(){
    // $parametros['titulo'] = 'Nova Postagem';
    // $this->load->view('cabecalho',$parametros);
    // $this->load->view('postagem/novo',$parametros);
    // $this->load->view('rodape');
	//}

	// public function obra_novo_salvar(){

	// }



}
