<?php
$title = 'transaksi';
require 'functions.php';
require 'layout_header.php';
$query = "SELECT transaksi.*,member.nama_member , detail_transaksi.total_harga FROM transaksi INNER JOIN member ON member.id_member = transaksi.member_id INNER JOIN detail_transaksi ON detail_transaksi.transaksi_id = transaksi.id_transaksi ";
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
                        <a href="transaksi_cari_member.php" class="btn btn-info box-title"><i class="fa fa-plus fa-fw"></i> Tambah</a>
                         <a href="transaksi_konfirmasi.php" class="btn btn-info box-title"><i class="fa fa-check fa-fw"></i> Konfirmasi Pembayaran</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered thead-dark" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Invoice</th>
                                <th>Member</th>
                                <th>Pemabayaran</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($data == null){  
                            
                                echo "<tr>";
                                echo "<td> kosong </td>";
                                echo "</tr>";
                                
                            ?>
                            <?php 
                            } else { ?>
                            <?php
                                foreach($data as $transaksi): ?>
                                <tr>
                                    <td></td>
                                    <td><?= $transaksi['kode_invoice'] ?></td>
                                    <td><?= $transaksi['nama_member'] ?></td>
                                    <td><?= $transaksi['status_bayar'] ?></td>
                                    <td><?= rupiah($transaksi['total_harga']) ?></td>
                                </tr>
                            <?php  endforeach; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require'layout_footer.php';
