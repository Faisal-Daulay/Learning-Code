<?php $this->load->view("header"); ?>
        
        <?php flashMessage(); ?>
        
        <div class="border-gray pb-2 mb-0">
            <div class="row">
                <div class="col-md-6">
                    <h4>DATA USER</h4>
                    <a class="btn btn-primary" href="<?= base_url('tambahuser') ?>"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>

        <div class="media text-muted pt-3">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Status User</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach ($datauser as $key => $value) { ?> 
                    <tr>
                      <td scope="row"><?= $no++; ?></td>
                      <td scope="row"><?= $value -> username; ?></td>
                      <td scope="row"><?= $value -> password; ?></td>
                      <td scope="row"><?= $value -> status_user; ?></td>
                      <td scope="row">
                        <a class="btn btn-warning" href="<?= base_url('edituser/'. $value->id_user) ?> ">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('deleteuser/'. $value->id_user) ?> ">
                            <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
        </div>

      </div>
    </main>

<?php $this->load->view("footer"); ?>