<div class="col-12 col-lg-4">
    <?php
                    $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                    $shakemap = $data->gempa->Shakemap;
                    ?>
    <div data-aos="zoom-in" class="card my-2">
        <div class="card-header" style="background-color:#343f52; color: white;">
            <h5>ShakeMap Gempa Dirasakan Indonesia</h5>
        </div>
        <div class="card-body">
            <div class="col-lg-12 gempa-map"><img src="https://data.bmkg.go.id/DataMKG/TEWS/<?php echo  $shakemap ?>"
                    width="100%" alt=""></div>
        </div>
    </div>
    <?php $this->load->view('layout/press_release') ?>
    <?php $this->load->view('layout/ikm') ?>

</div>