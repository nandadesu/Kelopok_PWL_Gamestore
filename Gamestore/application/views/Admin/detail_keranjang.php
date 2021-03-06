<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Game</th>
            <th>Harga</th>
            <th>Sub Total</th>
        </tr>
        <?php 
            $no=1;
            foreach ($this->cart->contents() as $items):
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td align="left">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                <td align="left">Rp. <?php echo number_format($items['subtotal'], 0,',','.')?></td>
            </tr>
        <?php 
            endforeach;
        ?>
        <tr>
            <td colspan="3">Total</td>
            <td align="right">Rp. <?php  echo number_format($this->cart->total(), 0,',','.')?></td>
        </tr>
    </table>

    <div align="right">
        <a href="<?php echo base_url('Home/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Cart</div>
        </a>
        <a href="<?php echo base_url('Home/index') ?>">
            <div class="btn btn-sm btn-primary">Lanjut Belanja</div>
        </a>
        <a href="<?php echo base_url('Home/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Checkout</div>
        </a>
       
    </div>
</div>