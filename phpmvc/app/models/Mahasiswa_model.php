<?php 

class Mahasiswa_model{
	private $table = 'mahasiswa';
	private $db;
	public function __construct()
	{
		$this->db = new database;
	}	
	public function getAllmhs(){
		$this->db->query('select * from ' . $this->table);
		return $this->db->resultSet();
	}
	public function getMahasiswaById($id){
		$this->db->query('select * from ' . $this->table . ' where id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	} 
	public function tambahDataMahasiswa($data){
		$query = "INSERT INTO mahasiswa VALUES ('', :name, :nim, :kampus, :jeniskelamin, :email, :jurusan)";
		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('kampus', $data['kampus']);
		$this->db->bind('jeniskelamin', $data['jeniskelamin']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);
		 
		$this->db->execute();

		return $this->db->rowHitung();

		
	}
	public function deleteDataMahasiswa($id){
			$query = "DELETE FROM mahasiswa where id =:id";
			$this->db->query($query);
			$this->db->bind('id',$id);

			$this->db->execute();
			
			return $this->db->rowHitung();
		}
	public function ubahDataMahasiswa($data){
		$query = "UPDATE mahasiswa SET name= :name, nim= :nim, kampus= :kampus, jeniskelamin=:jeniskelamin, email=:email, jurusan=:jurusan WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('kampus', $data['kampus']);
		$this->db->bind('jeniskelamin', $data['jeniskelamin']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('id', $data['id']);
			 
		$this->db->execute();
		return $this->db->rowHitung();	
	}
	public function carimhs(){
		$key = $_POST['keyword'];
		$query = "SELECT * FROM mahasiswa WHERE name like :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$key%");
		return $this->db->resultSet();
	}
}

?>    