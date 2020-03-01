

    <div class="row text-center ml-4 mt-4">
        <?php foreach ($game as $gm) : ?>
            <div class="card ml-3 mt-3" style="width: 18rem;">
                <img src="<?php echo base_url().'/uploads/'.$gm->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $gm->nama_game ?></h5>
                    <span class="badge badge-success mb-3">Rp. <?php echo number_format ($gm->harga, 0,',','.') ?></span><br>
                            
                        <?php echo anchor('Home/tambah_keranjang/' .$gm->id_game,'<div class="btn btn-primary btn-sm">Beli</div>') ?>
                    

                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<!--
<script type="text/javascript">
    $(document).ready(function){
        $('.add_cart').clik(function(){
            var jumlah = $('#' + id_barang).val();
        $.ajax({
            url
        })
        })
    }
</script> 
-->