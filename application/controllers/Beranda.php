<?php 

class Beranda extends CI_Controller
{
	function __construct(){
		parent::__construct();
		
	}
	public function index()
	{

		$this->load->model('BerandaM');
		//Masih Sementara
		$data['bukupopuler']=$this->BerandaM->populer();
		$data['bukuRecentBeranda']=$this->BerandaM->recentBeranda();
		$data['bukuSekolah']=$this->BerandaM->bukuSekolah();
		//
		$this->load->view('beranda',$data);
	}
	public function test(){
		echo "testing";
	}

	//--------------------------------------------------------------------

}
