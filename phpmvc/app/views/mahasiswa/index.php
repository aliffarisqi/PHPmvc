 <div class="container mt-3">

 <div class="row">
 	<div class="col-lg-6">
 		<?php flasher::flash();?> 
	</div>
 </div>
	
<div class="row mb-3">
 	<div class="col-lg-6">
		<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah mahasiswa
		</button>
	 </div>
</div>

<div class="row ">
 	<div class="col-lg-6">
		<form action="<?= BASEURL;?>/mahasiswa/cari" method="post">
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit" id="tombolCari">cari
				</button>
			</div>
		</div> 
		</form>
	 </div>
</div>
	<div class="row">
		<div class="col-lg-6">
			<h3>daftar mahasiswa</h3>
				<ul class="list-group">
					<?php foreach ($data['mhs'] as $mhs  ): ?>
				  		<li class="list-group-item ">
				  			<?= $mhs['name']?>
							  <a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mhs['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ingin menghapus ? ');">delete</a>

				  			<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'];?>" class="badge badge-success float-right ml-2 tampilModalUbah"data-toggle="modal" data-target="#formModal"data-id="<?=$mhs['id']; ?>">ubah</a>

				  			<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary float-right ml-2">Detail</a>
				  		</li>
					<?php endforeach ?>
				</ul>
		</div>
	</div>
</div>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah "method="POST">

		<input type="hidden" class="form-control" id="id"  name="id">

		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name"  name="name" autocomplete="off" required>
		</div>

		<div class="form-group">
			<label for="nim">nim</label>
			<input type="number" class="form-control" id="nim" name="nim" autocomplete="off" required>
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
		</div>
			<div class="form-group">
			<label for="jeniskelamin">jenis kelamin</label>
				<select class="form-control" id="jeniskelamin" name="jeniskelamin">
				<option value="laki laki">laki laki</option>
				<option value="perempuan">perempuan</option>
				</select>
			</div>

			<div class="form-group">
			<label for="jurusan">Jurusan</label>
				<select class="form-control" id="jurusan" name="jurusan">
				<option value="Teknik informatika">teknik informatika</option>
				<option value="Teknik industri">Teknik industri</option>
				<option value="Teknik kimia">teknik kimia</option>
				<option value="Teknik elektro">teknik elektro</option>
				<option value="Teknologi pangan">Teknologi pangan</option>
				</select>
			</div>

			<div class="form-group">
			<label for="kampus">kampus</label>
				<select class="form-control" id="kampus" name="kampus">
				<option value="universitas ahmad dahlan">universitas ahmad dahlan</option>
				<option value="universitas gajah mada">universitas gajah mada</option>
				<option value="universitas muhamadiyah yogyakarta">universitas muhamadiyah yogyakarta</option>
				<option value="universitas negri yogyakarta ">universitas negri yogyakarta </option>
				<option value="universitas islam indonesia">universitas islam indonesia</option>
				</select>
			</div>
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
		</form>
      </div>
    </div>
  </div>
</div>