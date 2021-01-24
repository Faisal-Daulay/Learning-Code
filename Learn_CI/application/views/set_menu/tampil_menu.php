<?php $this->load->view("header"); ?>
        
        <?php flashMessage(); ?>
        
        <div class="border-gray pb-2 mb-0">
            <div class="row">
                <div class="col-md-6">
                    <h4>DATA SETTING MENU</h4>
                    <a class="btn btn-primary" href="<?= base_url('tambahmenu') ?>"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>

        <div class="media text-muted pt-3">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Menu</th>
                  <th scope="col">Sub Menu</th>
                  <th scope="col">Link URL</th>
                  <th scope="col">Icon</th>
                  <th scope="col">Is Main Menu</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach ($datamenu as $key => $value) { ?> 
                    <tr>
                      <td scope="row"><?= $no++; ?></td>
                      <td scope="row"><?= $value->nama_menu; ?></td>
                      <td scope="row">
                        <?php
                          if ($value->sub_menu == 0) {
                            echo "Menu Utama";
                          } else {
                            echo "Sub Menu";
                          }
                        ?>
                      </td>
                      <td scope="row"><?= $value->link; ?></td>
                      <td scope="row"><?= $value->icon; ?></td>
                      <td scope="row">
                        <?php
                          if ($value->is_main_menu == 0) {
                            echo "Menu Utama";
                          } else {
                            echo "Sub Menu";
                          }
                        ?>
                      </td>
                      <td scope="row">
                        <a class="btn btn-warning" href="<?= base_url('editmenu/'. $value->idset_menu) ?> ">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('deletemenu/'. $value->idset_menu) ?> ">
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