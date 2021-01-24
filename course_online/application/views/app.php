<?php $this->load->view("header"); ?>
        
        <?php flashMessage(); ?>
        
        <div class="border-bottom border-gray pb-2 mb-0">
            <div class="row">
                <div class="col-md-10">
                    <h4>DATA SISWA</h4>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary" href="<?= base_url('tambahsiswa') ?>"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>

        <div class="media text-muted pt-3">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Siswa</th>
                  <th scope="col">Alamat Siswa</th>
                  <th scope="col">No Telepon Siswa</th>
                  <th scope="col">Email Siswa</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($datasiswa as $key => $value) { ?> 
                    <tr>
                      <th scope="row"><?= $value->id_siswa; ?></th>
                      <th scope="row"><?= $value->nama; ?></th>
                      <th scope="row"><?= $value->alamat; ?></th>
                      <th scope="row"><?= $value->notel; ?></th>
                      <th scope="row"><?= $value->email; ?></th>
                      <th scope="row" class="text-capitalize"><?= $value->jk ?></th>
                      <th scope="row"><?= $value->agama; ?></th>
                      <th scope="row">
                        <a class="btn btn-primary" href="<?= base_url('viewsiswa/'. $value->id_siswa) ?> ">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-warning" href="<?= base_url('editsiswa/'. $value->id_siswa) ?> ">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('deletesiswa/'. $value->id_siswa) ?> ">
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