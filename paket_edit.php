<?php
$title = 'paket';
require'functions.php';

$jenis = ['kiloan','selimut','bedcover','kaos','lain'];

$id_paket = stripslashes($_GET['id']);
$queryedit = "SELECT * FROM paket WHERE id_paket = '$id_paket'";
$edit = ambilsatubaris($conn,$queryedit);

if(isset($_POST['btn-simpan'])){
    $nama   = stripslashes($_POST['nama_paket']);
    $jenis_paket = stripslashes($_POST['jenis_paket']);
    $harga   = stripslashes($_POST['harga']);
    $outlet_id   = stripslashes($_POST['outlet_id']);

    $query = "UPDATE paket SET nama_paket='$nama',jenis_paket='$jenis_paket',harga='$harga' WHERE id_paket = '$id_paket'";
    
    $execute = bisa($conn,$query);
    if($execute == 1){
        $success = 'true';
        $title = 'Berhasil';
        $message = 'Berhasil Ubah Data';
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
                    <input type="text" name="nama_paket" class="form-control" value="<?= htmlspecialchars($edit['nama_paket']); ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Paket</label>
                    <select name="jenis_paket" class="form-control">
                        <?php foreach ($jenis as $key): ?>
                            <?php if ($key == $edit['jenis_paket']): ?>
                            <option value="<?= htmlspecialchars($key); ?>" selected><?= htmlspecialchars($key); ?></option>    
                            <?php endif ?>
                            <option value="<?= htmlspecialchars($key); ?>"><?= htmlspecialchars($key); ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?= htmlspecialchars($edit['harga']); ?>">
                </div>

                <div class="text-right">
                    <button type="submit" name="btn-simpan" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </>
</div>
<?php
require'layout_footer.php';
?> 
