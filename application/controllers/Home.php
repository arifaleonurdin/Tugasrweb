<?php

/**
* 
*/
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		if($this->session->userdata('login')==null){
			redirect('login');
		}
	}

	public function index(){
		$data = array(

			'judul'=>'Data Berita', 
			'data_berita'=> $this->m_data->data_berita(),

		); 
		
		$this->load->view('v_home',$data);
	}

	public function tambah_data(){
		$foto =$this->input->post('foto');
		$judul =$this->input->post('judul');
		$isi =$this->input->post('isi');

		$data = array(

			'foto_berita' => $foto,
			'judul_berita' => $judul,
			'isi_berita' => $isi,


		); 
		$this->m_data->input_data($data,'berita');
		redirect('http://localhost/Tugasrweb/home');

	}
}

?> 