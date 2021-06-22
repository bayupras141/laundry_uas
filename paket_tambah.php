<?php
$title = 'paket';
require 'functions.php';

if(isset($_POST['btn-simpan'])){
    $nama   = stripslashes($_POST['nama_paket']);
    $jenis_paket = stripslashes($_POST['jenis_paket']);
    $harga   = stripslashes($_POST['harga']);

    $query = "INSERT INTO paket (nama_paket,jenis_paket,harga) values ('$nama','$jenis_paket','$harga')";
    
    $execute = bisa($conn,$query);
    if($execute == 1){
        $success = 'true';
        $title = 'Berhasil';
        $message = 'Berhasil Simpan Data';
        $type = 'success';
        header('location: paket_index.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
    }else{
        echo "Gagal Tambah Data";
    }
}


require'layout_header.php';
?> 
<div class="container-fluid">
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="">
                <div class="form-group">
                    <label>Nama Paket</label>
                    <input type="text" name="nama_paket" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jenis Paket</label>
                    <select name="jenis_paket" class="form-control">
                        <option value="kiloan">kiloan</option>
                        <option value="selimut">selimut</option>
                        <option value="bedcover">bedcover</option>
                        <option value="kaos">kaos</option>
                        <option value="lain">lain</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>

                <div class="text-right">
                    <button type="submit" name="btn-simpan" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require'layout_footer.php';
?> 
