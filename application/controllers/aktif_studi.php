<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
/**
* Required untuk akses data customer di server
*/
class aktif_studi extends CI_Controller{
var $API = "";
	function __construct(){
	parent::__construct();
	$this->API="http://localhost/server/index.php/api/aktif_studis/";
}
// menampilkan daftar customer
function index(){
	$data['aktif_studis'] = $this->__execute($this->API,'get', '');
	$this->template->load('template_master','aktif_studi/list',$data);
}
//load form tambah dan memproses simpan data baru
function add(){
	if (isset($_POST['submit'])){
	$params = array(
		'nama'=> $this->input->post('nama'),
		'nim'=> $this->input->post('nim'),
		'fakultas'=> $this->input->post('fakultas'),
		'progdi'=> $this->input->post('progdi'));
	$this->__execute($this->API, 'post',$params);
	redirect('aktif_studi');
	}else{
		$this->template->load('template_master', 'aktif_studi/add');
	}
}
//load form edit dan memproses simpan update data
function edit(){
	if (isset( $_POST ['submit'])) {
		$params = array(
			'nama'=> $this->input->post('nama'),
			'nim'=> $this->input->post('nim'),
			'fakultas'=> $this->input->post('fakultas'),
			'progdi'=> $this->input->post('progdi'),
			'id'=> $this->input->post('id'));	
		$result = $this->__execute($this->API.'format/json/','put',$params);
		redirect('aktif_studi');
	} else {
	$id = $this->uri->segment(3);
	$data['aktif_studi'] = $this->__execute($this->API.'id/'.$id,'get',array('id' => $id));
	$this->template->load('template_master','aktif_studi/edit',$data);
	}
}

//hapus data customer
function delete(){
	$id = $this->uri->segment(3);
	$this->__execute($this->API,'delete', array('id' => $id));
	redirect('aktif_studi');
}
function __execute($url,$method,$param){
	$this->curl->create($url);
	$this->curl->$method($param);
	$result = json_decode($this->curl->execute());
	return $result;
}
}
?>	

