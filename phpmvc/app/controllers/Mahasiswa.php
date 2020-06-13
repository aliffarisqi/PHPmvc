<?php 
class Mahasiswa extends Controller{
	public function index(){
		$data['judul']='daftar nama Mahasiswa';
		$data['mhs']=$this->model('Mahasiswa_model')->getALLmhs();
		$this->view('templates/header',$data);
		$this->view('mahasiswa/index',$data);
		$this->view('templates/footer');
	}
	public function detail($id){
		$data['judul']='detail Mahasiswa';
		$data['mhs']=$this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header',$data);
		$this->view('mahasiswa/detail',$data);
		$this->view('templates/footer');
	}
	public function tambah()
	{
		if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)>0){
			
			flasher::setFlasher('berhasil','ditambahkan','success');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}
		else{
			flasher::setFlasher('gagal','ditambahkan','danger');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}
	}
	public function delete($id)
	{
		if($this->model('Mahasiswa_model')->deleteDataMahasiswa($id)>0){
			
			flasher::setFlasher('berhasil','dihapus','success');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}
		else{
			flasher::setFlasher('Gagal','dihapus','danger');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}
	}
	public function getUbah(){
		echo json_encode($this->model('mahasiswa_model')->getMahasiswaById($_POST['id']));
	}
	public function ubah(){
		if($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST)>0){
			
			flasher::setFlasher('berhasil','diubah','success');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}
		else{
			flasher::setFlasher('gagal','diubah','danger');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}
	}
	public function cari(){
		$data['judul']='daftar nama Mahasiswa';
		$data['mhs']=$this->model('Mahasiswa_model')->carimhs();
		$this->view('templates/header',$data);
		$this->view('mahasiswa/index',$data);
		$this->view('templates/footer');
	}
} 
?> 