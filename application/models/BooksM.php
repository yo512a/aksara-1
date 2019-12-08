<?php 
class BooksM extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function bookReader($slug){
		return $this->db->query('select judul,penulis,tahun,rating,voters,file from buku where slug="'.$slug.'"')->result();
	}
}