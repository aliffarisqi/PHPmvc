  <div class="container mt-5">
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title">
	    	<?= $data['mhs']['name']?>	
	    </h5>
	    <h6 class="card-subtitle mb-2 text-muted">
	    	<?= $data['mhs']['nim']?>
	    </h6>
	    <p class="card-text">
	    	<?= $data['mhs']['email']?>
	    </p>
	    <p class="card-text">
	    	<?= $data['mhs']['jeniskelamin']?>
	    </p>
	    <p class="card-text">
	    	<?= $data['mhs']['jurusan']?>
	    </p>
	    <p class="card-text">
	    	<?= $data['mhs']['kampus']?>
	    </p>
	    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">kembali</a>
	    
	  </div>
	</div>
</div>
