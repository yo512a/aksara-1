<?php 

class Books extends CI_Controller{
	public function index(){
		if(!$this->uri->segment(2)){
			$this->load->view('books');
		}else{
			//echo $uri->getSegment(2);
			$this->load->model('BooksM');
			$data['bookReader']=$this->BooksM->bookReader($this->uri->segment(2));
			$this->load->view('bookReader',$data);
		}
	}
}