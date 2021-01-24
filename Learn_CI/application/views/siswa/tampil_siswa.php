<?php $this->load->view("header"); ?>
        
        <?php flashMessage(); ?>
        
        <div class="border-gray pb-2 mb-0">
            <div class="row">
                <div class="col-md-6">
                    <h4>DATA SISWA</h4>
                    <a class="btn btn-primary" href="<?= base_url('tambahsiswa') ?>"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>

        <div class="media text-muted pt-3">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No Telepon</th>
                  <th scope="col">Email</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach ($datasiswa as $key => $value) { ?> 
                    <tr>
                      <td scope="row"><?= $no++; ?></td>
                      <td scope="row"><?= $value->nama; ?></td>
                      <td scope="row"><?= $value->alamat; ?></td>
                      <td scope="row"><?= $value->notel; ?></td>
                      <td scope="row"><?= $value->email; ?></td>
                      <td scope="row" class="text-capitalize"><?= $value->jk ?></td>
                      <td scope="row"><?= $value->agama; ?></td>
                      <td scope="row">
                        <a class="btn btn-primary" href="<?= base_url('viewsiswa/'. $value->id_siswa) ?> ">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-warning" href="<?= base_url('editsiswa/'. $value->id_siswa) ?> ">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('deletesiswa/'. $value->id_siswa) ?> ">
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