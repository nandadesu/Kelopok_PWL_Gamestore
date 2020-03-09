<div class="container-fluid">
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_game"><i class="fas fa-plus fa-sm"></i> Tambah</button>
    <table class="table table-border mt-3" >
        <tr>
            <th>No</th>
            <th>Nama Game</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php  
            $no=1;
            foreach($game as $gm) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $gm->nama_game ?></td>
                <td><?php echo $gm->harga ?></td>
                <td><?php echo anchor('Data_game/edit/' .$gm->id_game , '<div class="btn btn-primary btn-sm"><i class="fas fa-edit fa-sm"></i></div>') ?></td>
                <td><?php echo anchor('Data_game/hapus/' .$gm->id_game , '<div class="btn btn-danger btn-sm"><i class="fas fa-trash fa-sm"></i></div>') ?></td>
            </tr>
            <?php endforeach ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_game" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'Akun_admin/Data_game/Tambah_aksi' ; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Game</label>
                <input type="text" name="nama_game" class="form-control" value="<?php echo $gm->nama_game ?>">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $gm->deskripsi ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $gm->harga ?>">
            </div>
            <div class="form-group">
                <label>Gambar Produk</label><br>
                <input type="file" name="gambar" class="form-control" value="<?php echo $gm->gambar ?>">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>