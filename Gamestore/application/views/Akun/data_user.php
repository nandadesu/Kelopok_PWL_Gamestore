<div class="container-fluid">
    <table class="table table-border mt-3" >
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Level</th>
            <th>Status</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php  
            foreach($user as $usr): ?>
            <tr>
                <td><?= $usr['username'];?></td>
                <td><?= $usr['email'];?></td>
                <td><?= $usr['password'];?></td>
                <td><?= $usr['level'];?></td>
                <td><?= $usr['status'];?></td>
                <td>
                    <a href="Admin_akun/activate/<?= $usr['id'];?>" class="btn btn-info mr-2">🔓 Aktifkan</a>
                    <a href="Admin_akun/disable/<?= $usr['id'];?>" class="btn btn-danger">🔏 Disable</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

    