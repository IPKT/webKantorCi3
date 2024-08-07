<div class="card my-2">
    <div class="card-header" style="background-color:#343f52; color: white;">
        <div>
            <h5>Gempa Bumi Terkini </h5>
        </div>
    </div>
    <div class="card-body">
        <div id="map" class="map" style="width: 100%; height: 500px;"></div>
        <div class="table-responsive">
            <table class="table table-hover table-striped small">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Waktu Gempa</th>
                        <th>Koordinat</th>
                        <th>Magnitudo</th>
                        <th>Kedalaman</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
        $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml") or die ("Gagal ambil!");
        $no = 1;
        foreach ($data->gempa as $gempaM5):
        if ($no > 5) {
            continue;
        }?>
                    <tr>
                        <td><?php echo $no; $no++?></td>
                        <td><?php echo $gempaM5->Tanggal?> <?php echo $gempaM5->Jam?></td>
                        <td><?php echo $gempaM5->Lintang?><br><?php echo $gempaM5->Bujur?></td>
                        <td class="text-center"><?php echo $gempaM5->Magnitude?> SR</td>
                        <td class="text-center"><?php echo $gempaM5->Kedalaman?></td>
                        <td><?php echo $gempaM5->Wilayah?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card mt-2">
    <div class="card-header" style="background-color:#343f52; color: white;">
        <div>
            <h5>Kegiatan</h5>
        </div>
    </div>
    <div class="card-body">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('gambar/kegiatan/20240620.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Sekolah Lapang Gempa Bumi 2024</h5>
                        <h6>20 Juni 2024</h6>
                        <div class="text-center"><a href="<?php echo base_url('artikel/20240626') ?>"
                                class="btn btn-success">Selengkapnya</a></div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="<?php echo base_url('gambar/kegiatan/20240523.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kunjungan Kerja OJT DGMET Oman</h5>
                        <h6>23 Mei 2024</h6>
                        <div class="text-center"><a href="<?php echo base_url('kegiatan/20240523') ?>"
                                class="btn btn-success">Selengkapnya</a></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('gambar/kegiatan/20240517.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kunjungan Perwakilan World Bank</h5>
                        <h6>17 Mei 2024</h6>
                        <!-- <p>Some representative placeholder content for the third slide.</p> -->
                        <div class="text-center"><a href="<?php echo base_url('kegiatan/20240517') ?>"
                                class="btn btn-success">Selengkapnya</a></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('gambar/kegiatan/20240516.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kunjungan TK Dharma Kumara</h5>
                        <h6>16 Mei 2024</h6>
                        <div class="text-center"><a href="<?php echo base_url('kegiatan/20240516') ?>"
                                class="btn btn-success">Selengkapnya</a></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('gambar/kegiatan/20240425.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kunjungan RA An Nur</h5>
                        <h6>25 April 2024</h6>
                        <!-- <p>Some representative placeholder content for the second slide.</p> -->
                        <div class="text-center"><a href="<?php echo base_url('kegiatan/20240425') ?>"
                                class="btn btn-success">Selengkapnya</a></div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div data-aos="zoom-in" class="container-fluid" id="container-layanan">
    <div>
        <h5 id="judul-layanan">Layanan</h5>
    </div>
    <div class="row mb-2">
        <div class="col-xs-12 col-md-4 pt-2 pb-2">
            <div class="card card-glow">
                <img src="<?php echo base_url('gambar/2.png') ?>" width="70%" class="mx-auto mt-3">
                <div class="card-body">
                    <h5>Informasi Geofisika</h5>
                    <p class="card-text">Menyediakan informasi kejadian Gempa Bumi, Potensi Tsunami, dan kejadian petir
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 pt-2 pb-2">
            <div class="card card-glow">
                <img src="<?php echo base_url('gambar/1.png') ?>" width="70%" class="mx-auto mt-3">
                <div class="card-body">
                    <h5>Permintaan Data</h5>
                    <p class="card-text">Melayani permintaan data cuaca kota Denpasar, data petir, dan kejadian gempa
                        yang lalu.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 pt-2 pb-2">
            <div class="card card-glow">
                <img src="<?php echo base_url('gambar/6.png') ?>" width="70%" class="mx-auto mt-3">
                <div class="card-body">
                    <h5>Informasi Tanda Waktu</h5>
                    <p class="card-text">Menyediakan informasi zona waktu, terbit terbenam matahari, hilal</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-4 pt-2 pb-2">
            <div class="card card-glow">
                <img src="<?php echo base_url('gambar/4.png') ?>" width="70%" class="mx-auto mt-3">
                <div class="card-body">
                    <h5>Praktek Kerja Lapangan</h5>
                    <p class="card-text">Menerima mahasiswa yang ingin melaksanakan PKL sesuai jurusan terkait</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 pt-2 pb-2">
            <div class="card card-glow">
                <img src="<?php echo base_url('gambar/5.png') ?>" width="70%" class="mx-auto mt-3">
                <div class="card-body">
                    <h5>Narasumber</h5>
                    <p class="card-text">Melayani permintaan sebagai narasumber pada kegiatan
                        sesuai dengan tugas & fungsi BMKG</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 pt-2 pb-2">
            <div class="card card-glow">
                <img src="<?php echo base_url('gambar/3.png') ?>" width="70%" class="mx-auto mt-3">
                <div class="card-body">
                    <h5>Kunjungan Sekolah</h5>
                    <p class="card-text">Mengenalkan mitigasi bencana gempabumi dan tsunami kepada siswa sekolah</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

const map = L.map('map', {
    center: [-1.05568670665649, 116.4108625784261],
    zoom: 4,
    layers: [googleSat]
});

const baseLayers = {
    'Default': googleSat,
    'Satelite': googleSat,
};

const layerControl = L.control.layers(baseLayers).addTo(map);
</script>

<!-- MENAMPILKAN SELURUH GEMPA -->
<?php
$data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml") or die ("Gagal ambil!");
$koordinatTerakhir = "";
$i = 1;
foreach($data->gempa as $gempaM5) { 
    if ($i==1) {
        $koordinatTerakhir = $gempaM5->point->coordinates;
    }?>
<script>
var circleMarker2 = L.circle([<?php echo $gempaM5->point->coordinates?>], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.8,
    radius: 10000,
}).addTo(map);
</script>

<?php $i++;}?>


<!-- MEMBERIKAN ANIMASI PADA GEMPA TERBARU -->
<script>
var circleMarker = L.circle([<?php echo $koordinatTerakhir?>], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0,
    radius: 10000,
}).addTo(map);

// Variabel untuk menyimpan interval animasi
var animationInterval;

// Fungsi untuk mengubah ukuran marker
function toggleMarkerSize() {
    var scaleFactor = 2;
    var originalRadius = 10000;
    var enlargedRadius = originalRadius * scaleFactor;
    var terbesar = 120000;

    var currentRadius = circleMarker.getRadius();

    if (currentRadius < terbesar) {
        circleMarker.setRadius(currentRadius + 5000);

    } else {
        circleMarker.setRadius(originalRadius);
    }
}

// Atur interval animasi
animationInterval = setInterval(toggleMarkerSize, 100); // Animasi setiap 1 detik
</script>