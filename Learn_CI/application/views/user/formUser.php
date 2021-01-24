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
            <label>Username</label>
            <input type="text" name="user" class="form-control" placeholder="Masukkan Username" value="<?= !empty($getUser) ? $getUser->username : null; ?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" class="form-control" placeholder="Masukkan Password" value="<?= !empty($getUser) ? $getUser->password : null; ?>">
        </div>
        <div class="form-group">
            <label>Status User</label>
            <select name="status" class="form-control">
                <option value="admin">Admin</option>
                <option value="pegawai">Pegawai</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?php $this -> load -> view("footer"); ?>