 <?php
class About extends Controller{
	public function index($nama = "bayu",$pekerjaan="programmer",$umur="20"){
		$data['nama']=$nama;
		$data['pekerjaan']=$pekerjaan;
		$data['umur']=$umur;
		$data['judul']='about me';
		$this->view('templates/header',$data);
		$this->view('about/index',$data);
	}
	public function page(){
		$data['judul']='page';
		$this->view('templates/header',$data);
		$this->view('about/page');
	}

}
?>
