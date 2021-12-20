<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index.php');
	}
	function Simpan()
	 {
		 $nama=$this->input->post('xnama');
		 $email=$this->input->post('xemail');
		 $kategori=$this->input->post('xkategori');
		 $pesan=$this->input->post('xpesanan');
	
		 $this->db->query("INSERT INTO  tbl_pesanan (nama,email,kategori,pesan) VALUES ('$nama','$email','$kategori','$pesan')");
		 redirect('Home');
		 
	 }
}