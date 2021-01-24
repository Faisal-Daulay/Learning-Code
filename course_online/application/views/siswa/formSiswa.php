<?php $this->load->view("header"); ?>
        
        <div class="border-bottom border-gray pb-2 mb-0">
            <div class="row">
                <div class="col-md-10">
                    <h4><?php echo $title; ?></h4>
                </div>
            </div>
        </div>

        <div class="pt-3">
            <form method="POST" action="<?php current_url(); ?>">
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" value="<?= !empty($getSiswa) ? $getSiswa->nama : null; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat Siswa</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan ALamat Siswa" value="<?= !empty($getSiswa) ? $getSiswa->alamat : null; ?>">
                </div>
                <div class="form-group">
                    <label>No Telepon Siswa</label>
                    <input type="text" name="notel" class="form-control" placeholder="Masukkan No Telepon Siswa" value="<?= !empty($getSiswa) ? $getSiswa->notel : null; ?>">
                </div>
                <div class="form-group">
                    <label>Email Siswa</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Siswa" value="<?= !empty($getSiswa) ? $getSiswa->email : null; ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="pria">Male</option>
                        <option value="wanita">Female</option>
                    </select>
                    <!-- <input type="email" name="email" class="form-control" placeholder="Masukkan Email Siswa" value="<?= !empty($getSiswa) ? $getSiswa->email : null; ?>"> -->
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="form-control">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="budha">Budha</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

<?php $this->load->view("footer"); ?>