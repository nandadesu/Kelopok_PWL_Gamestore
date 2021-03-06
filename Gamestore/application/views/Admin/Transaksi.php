<di class="container-fluid">
    <h4>Detail Pesanan 
        <div class="btn btn-sm btn-success">
            No. Invoice: <?php echo $transaksi->id ?>
        </div>
    </h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub Total</th>
        </tr>
        <?php $total = 0; ?>
        <?php      foreach ($transaksi as $psn):{
              $subtotal = $psn->jumlah * $psn->harga;
              $total += $subtotal;
            }
        ?>
        <tr>
            <td><?php echo $psn->id_game ?></td>
            <td><?php echo $psn->nama_game?></td>
            <td><?php echo number_format($psn->harga, 0,',','.') ?></td>
            <td><?php echo number_format($subtotal, 0,',','.') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>