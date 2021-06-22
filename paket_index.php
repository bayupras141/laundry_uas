<?php
$title = 'paket';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT * FROM paket';
$data = ambildata($conn,$query);
?> 
<div class="container-fluid">
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-6">
                        <a href="paket_tambah.php" class="btn btn-info box-title"><i class="fa fa-plus fa-fw"></i> Tambah</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered thead-dark" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Paket</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $paket): ?>
                                <tr>
                                    <td></td>
                                    <td><?= htmlspecialchars($paket['nama_paket']); ?></td>
                                    <td><?= htmlspecialchars($paket['jenis_paket']); ?></td>
                                    <td><?= rupiah($paket['harga']); ?></td>
                                    <td align="center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="paket_edit.php?id=<?= htmlspecialchars($paket['id_paket']); ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success">Edit</a>
                                          <a href="paket_hapus.php?id=<?= htmlspecialchars($paket['id_paket']); ?>" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
    </div>
</div>
<?php
require'layout_footer.php';
