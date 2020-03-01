

<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Invoice</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id Transaksi</th>
                <th>Nama Game</th>
                <th>Harga</th>
                <th>Tgl Pemesanan</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($invoice as $inv):?>
                <tr>
                <td><?php echo $htr->id ?></td>
                <td><?php echo $htr->nama_game ?></td>
                <td><?php echo $htr->harga ?></td>
                <td><?php echo $htr->tgl_pembelian ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>

</div>