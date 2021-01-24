<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('__partials/head.php'); ?>
  <body>
    <?php $this->load->view('__partials/menu.php'); ?>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
        <div class="panel panel-default">
        <!-- Default panel contents -->
            <div class="panel-heading">Data Buku</div>
            <div class="panel-body">
                <a href="#" class="btn btn-primary">Tambah Data</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Action</th>
                    </tr>    
                </thead>
                <tbody>
                    <?php
                        foreach ($dataBuku as $key => $ambil) {
                    ?>
                    <tr>
                        <td><?= $ambil -> id; ?></td>
                        <td><?= $ambil -> nm_buku; ?></td>
                        <td><?= $ambil -> jumlah_buku; ?></td>
                        <td>
                            <a href="#" class="btn btn-warning">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="#" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div> <!-- /container -->


    <?php $this->load->view('__partials/footer.php'); ?>
  </body>
</html>
