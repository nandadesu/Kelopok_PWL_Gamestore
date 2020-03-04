<di class="container-fluid">
<div class="card">
  <div class="card-header">
    Info User
  </div>
  <div class="card-body">
    <div class="row">
       <div class="col-md-8">
            <?php foreach ($user as $usr): ?>
                <table class="table">
                    <tr>
                      <td>Username</td>
                      <td><?= $usr['username']; ?></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td><strong><?= $usr['email']; ?></strong></td>
                    </tr>
                </table>
            <?php endforeach; ?>
            <a class="nav-link" href="<?php echo base_url('History') ?>">
              <i class="fas fa-fw fa-table"></i>
              <span>History</span>
            </a>
       </div> 
    </div>
  </div>
</div>
</di>
