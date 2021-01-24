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
                    <label>Nama Buku</label>
                    <input type="text" name="nm_buku" class="form-control" placeholder="Masukkan Nama Buku" value="<?= !empty($getBuku) ? $getBuku->nm_buku : null; ?>">
                </div>
                <div class="form-group">
                    <label>Jumlah Buku</label>
                    <input type="text" name="jumlah_buku" class="form-control" placeholder="Masukkan Jumlah Buku" value="<?= !empty($getBuku) ? $getBuku->jumlah_buku : null; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

<?php $this->load->view("footer"); ?>