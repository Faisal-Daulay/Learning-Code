<?php $this->load->view("header") ?>
    
    <div class="border-bottom border-gray pb-2 mb-0">
        <div class="row">
            <div class="col-md-10">
                <h4>Welcome to <?= $title; ?></h4>
            </div>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Siswa</h5>
                    <i class="fa fa-group"></i>
                    <p class="card-text">
                        Silahkan klik untuk menambah atau menghapus data siswa sacara permanen.
                    </p>
                    <a href="<?= base_url("siswa"); ?>" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Setting Menu</h5>
                    <i class="fa fa-gear"></i>
                    <p class="card-text">
                        Silahkan klik untuk menambah atau menghapus menu sacara permanen.
                    </p>
                    <a href="<?= base_url("setting_menu"); ?>" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-2">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Setting User</h5>
                    <i class="fa fa-user"></i>
                    <p class="card-text">
                        Silahkan klik untuk menambah atau menghapus user sacara permanen.
                    </p>
                    <a href="<?= base_url("user"); ?>" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view("footer") ?>