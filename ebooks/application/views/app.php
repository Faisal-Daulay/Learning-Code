<?php $this->load->view("header"); ?>
        
        <?php flashMessage(); ?>
        
        <div class="border-bottom border-gray pb-2 mb-0">
            <div class="row">
                <div class="col-md-10">
                    <h4>DATA BUKU</h4>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary" href="<?= base_url('tambahbuku') ?>"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>

        <div class="media text-muted pt-3">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Buku</th>
                  <th scope="col">Jumlah Buku</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($dataBuku as $key => $value) { ?> 
                    <tr>
                      <th scope="row"><?= $value->id ?></th>
                      <th scope="row"><?= $value->nm_buku ?></th>
                      <th scope="row"><?= $value->jumlah_buku ?></th>
                      <th scope="row">
                        <a class="btn btn-primary" href="<?= base_url('viewbuku/'. $value->id) ?> ">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-warning" href="<?= base_url('editbuku/'. $value->id) ?> ">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('deletebuku/'. $value->id) ?> ">
                            <i class="fa fa-trash"></i>
                        </a>
                      </th>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
        </div>
<!-- 
        <small class="d-block text-right mt-3">
          <a href="#">All suggestions</a>
        </small> -->

      </div>
    </main>

<?php $this->load->view("footer"); ?>