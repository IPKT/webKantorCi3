<div class="col-12 col-lg-4">
    <?php
                    // $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                    // $shakemap = $data->gempa->Shakemap;
                    $srcShakemap="";
                    $shakemap = "";
                    // $db = \Config\Database::connect();
                    $this->load->database();
                    $query = $this->db->query('SELECT id FROM gempabalidirasakan ORDER BY id DESC LIMIT 1');
                    $results   = $query->row();
                    if($results->id ==NULL or $results->id == "" ){
                        $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                        $shakemap = $data->gempa->Shakemap;
                        $srcShakemap="https://data.bmkg.go.id/DataMKG/TEWS/".$shakemap;
                    } else{
                        $shakemap = $results->id;
                        $srcShakemap="https://data.bmkg.go.id/DataMKG/TEWS/".$shakemap.".mmi.jpg";
                    }
                    
                    ?>
    <div data-aos="zoom-in" class="card my-2">
        <div class="card-header" style="background-color:#343f52; color: white;">
            <h5>ShakeMap Gempa Dirasakan</h5>
        </div>
        <div class="card-body">
            <div class="col-lg-12 gempa-map"><img src="<?php echo $srcShakemap?>" width="100%"
                    alt="informasi gempa bumi region 3"></div>
        </div>
    </div>

    <?php $this->load->view('layout/press_release') ?>
    <?php $this->load->view('layout/ikm') ?>

</div>