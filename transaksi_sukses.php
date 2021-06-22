<?php
$title = 'transaksi';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT transaksi.*,member.nama_member , detail_transaksi.total_harga FROM transaksi INNER JOIN member ON member.id_member = transaksi.member_id INNER JOIN detail_transaksi ON detail_transaksi.transaksi_id = transaksi.id_transaksi WHERE transaksi.id_transaksi = ' . $_GET['id'];
$data = ambilsatubaris($conn,$query);
?> 
<div class="container-fluid">
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center" style="padding-left: 50px;padding-right: 50px;">
                        <div class="bg-success" style="font-size: 125px;border-radius: 20px">
                            <i class="fa fa-check fa-10x text-white"></i>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>Pesanan Atas Nama <?= $data['nama_member'] ?> Behasil Di Simpan</h3>
                        <strong>Kode Invoice <?= $data['kode_invoice'] ?></strong><br>
                        <strong>Total Pembayaran <?= rupiah($data['total_harga']) ?></strong><br><br>
                        <a href="transaksi_index.php" class="btn btn-info">Kembali Ke Menu Utama</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
require'layout_footer.php';
