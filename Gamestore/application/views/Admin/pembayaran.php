<div class="container-fluid">
    <div class="row">
        <div class="col md-2"></div>
        <div class="col md-8">
            <div class="btn btn-sm btn-success">
                <?php  
                    $grand_total = 0;
                    if($keranjang = $this->cart->contents())
                    {
                        foreach($keranjang as $item){
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        echo "<h4>Total Belanja Anda: Rp. " . number_format($grand_total, 0,',','.');
                    
                ?>

            </div><br><br>
            <h3>Input alamat pengiriman</h3>
            <form action="<?php echo base_url('Home/proses_pesanan') ?>" method="post">
                    <div class="from-group">
                        <label >Username</label>
                        <input class="form-control" type="text" name="nama" placeholder="username">
                    </div>
                    <div class="from-group">
                        <label >Email</label>
                        <input class="form-control" type="text" name="email" placeholder="email">
                    </div>
                    <div class="from-group">
                        <label >Metode Pembayaran</label>
                        <select class="form-control">
                            <option >PayPal</option>
                            <option >Virtual Account</option>
                            <option >Google Pay</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary mt-3">Pesan</button>
            </form>
            <?php  
                }else{
                    echo "<h4>Keranjang Belanja Anda Masih Kosong";
                }
            ?>
        </div>
        <div class="col md-2"></div>
    </div>
</div>