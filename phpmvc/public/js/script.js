$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#name').val("");
        $('#nim').val("");
        $('#email').val("");
        $('#jeniskelamin').val("");
        $('#jurusan').val("");
        $('#kampus').val("");
    });

    $('.tampilModalUbah').on('click', function(){
       $('#judulModal').html('Ubah Data Mahasiswa'); 
       $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');
       const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
               $('#name').val(data.name);
               $('#nim').val(data.nim);
               $('#email').val(data.email);
               $('#jeniskelamin').val(data.jeniskelamin);
               $('#jurusan').val(data.jurusan);
               $('#kampus').val(data.kampus);
               $('#id').val(data.id);
//    
//    
            }
 
        });



    });

   
});