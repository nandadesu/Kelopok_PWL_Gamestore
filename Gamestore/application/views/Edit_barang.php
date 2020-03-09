<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit data game</h3>
    <?php foreach($game as $gm) : ?>
        <form method="post" action="<?php echo base_url(). 'Data_game/update/' ?>">
            <div class="for-group">
                <label >Nama game</label>
                <input type="text" name="nama_game" value="<?php echo $gm->nama_game ?>" class="form-control">
            </div>
            <div class="for-group">
                <label >Keterangan</label>
                <input type="hidden" name="id_game" value="<?php echo $gm->id_game ?>" class="form-control">
                <input type="text" name="deskripsi" value="<?php echo $gm->deskripsi ?>" class="form-control">
            </div>
            <div class="for-group">
                <label >Harga</label>
                <input type="text" name="harga" value="<?php echo $gm->harga ?>" class="form-control">
            </div><br><br>
            <button type="submit" class="btn btn-primary btn-lg">Save</button>
        </form>
    <?php endforeach; ?>
</div>