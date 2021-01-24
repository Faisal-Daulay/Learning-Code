<?php $this->load->view("header"); ?>

        <div class="border-bottom border-gray pb-2 mb-0">
            <div class="row">
                <div class="col-md-10">
                    <h4><?php echo $title; ?></h4>
                </div>
            </div>
        </div>
    
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <div class="media text-muted">
                <!-- <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg> -->
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark"><?= $getSiswa->nama ?></strong>
                        <p><?= $getSiswa->alamat ?></p>
                    </div>
                </div>
            </div>

          </div>

<?php $this->load->view("footer"); ?>