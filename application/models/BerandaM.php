<?php 

class BerandaM extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function populer(){
		return $this->db->query('select gambar,judul,slug,penulis,tahun,rating,voters from buku')->result();
	}
	public function recentBeranda(){
		return $this->db->query('select gambar,judul,slug,penulis,tahun,rating,voters from buku order by tglInput desc limit 5')->result();
	}
	public function bukuSekolah(){
		return $this->db->query('select judul,penulis,tahun,gambar,slug,rating,voters from buku where tags like "%sekolah%" limit 5')->result();
	}
}
?>