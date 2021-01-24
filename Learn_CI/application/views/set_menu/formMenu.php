<?php $this -> load -> view("header"); ?>

<div class="border-bottom border-gray pb-2 mb-0">
    <div class="row">
        <div class="col-md-10">
            <h4><?= $title; ?></h4>
        </div>
    </div>
</div>

<div class="pt-3">
    <form method="POST" action="<?php current_url(); ?>">
        <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" name="nama_menu" class="form-control" placeholder="Masukkan Nama Menu" value="<?= !empty($getMenu) ? $getMenu->nama_menu : null; ?>">
        </div>
        <div class="form-group">
            <label>Sub Menu</label>
            <select name="sub_menu" class="form-control">
                <option value="0">Menu Utama</option>
                <?php
                    $pilih_menu = $this->db->get_where('set_menu', array('is_main_menu'=>0))->result();
                    foreach ($pilih_menu as $pilmenu) {
                        echo "
                            <option value='$pilmenu->idset_menu'>$pilmenu->nama_menu</option>
                        ";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Link Menu</label>
            <input type="text" name="link" class="form-control" placeholder="Masukkan Link" value="<?= !empty($getMenu) ? $getMenu->link : null; ?>">
        </div>
        <div class="form-group">
            <label>Icon</label>
            <input type="text" name="icon" class="form-control" placeholder="Masukkan Icon" value="<?= !empty($getMenu) ? $getMenu->icon : null; ?>">
        </div>
        <div class="form-group">
            <label>Is Main Menu</label>
            <select name="is_main_menu" class="form-control">
                <option value="0">Sebagai Menu Utama</option>
                <option value="1">Sebagai Sub Menu</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <!-- <div class="form-group">
            <label>Is Main Menu</label>
            <input type="email" name="is_main_menu" class="form-control" placeholder="Masukkan Is Main Menu" value="<?= !empty($getMenu) ? $getMenu->is_main_menu : null; ?>">
        </div> -->
    </form>
</div>

<?php $this -> load -> view("footer"); ?>