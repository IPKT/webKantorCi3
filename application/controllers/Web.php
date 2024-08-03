<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = array(
			'page' => 'profil/beranda',
		);
		$this->load->view('layout/template_beranda',$data,false);	
	}

	public function beranda(){
		$data = array(
			'page' => 'profil/beranda',
		);
		$this->load->view('layout/template_beranda',$data,false);
		// $this->load->view('layout/coba',$data,false);	
	}

	//PROFILE KANTOR
	public function visiMisi(){
		$data = array(
			'page' => 'profil/visi',
		);
		$this->load->view('layout/template',$data,false);	
	}

	public function sejarah(){
		$data = array(
			'page' => 'profil/sejarah',
		);
		$this->load->view('layout/template',$data,false);	
	}
	public function tugas(){
		$data = array(
			'page' => 'profil/tugas',
		);
		$this->load->view('layout/template',$data,false);	
	}

	public function struktur(){
		$data = array(
			'page' => 'profil/struktur',
		);
		$this->load->view('layout/template',$data,false);	
	}

	//LAYANAN
	public function standarLayanan(){
		$data = array(
			'page' => 'layanan/standar',
		);
		$this->load->view('layout/template',$data,false);	
	}

	//INFO GEMPA
	public function infogempaterkini(){
		$data = array(
			'page' => 'informasiGempaBumi/gempaBumiTerkini',
		);
		$this->load->view('layout/template_gempa_terkini',$data,false);	
	}

	public function infogempadirasakan(){
		$data = array(
			'page' => 'informasiGempaBumi/gempaBumiDirasakan',
		);
		$this->load->view('layout/template_gempa_dirasakan',$data,false);	
	}

	// ARTIKEL
	public function artikel($code){
		$data = array(
			'page' => 'artikel/artikel_'.$code,
		);
		$this->load->view('layout/template',$data,false);	
	}


	// KEGIATAN
	public function kegiatan($code){
		$data = array(
			'page' => 'kegiatan/kegiatan_'.$code,
		);
		$this->load->view('layout/template',$data,false);	
	}

	// Publikasi
	public function buletin(){
		$data = array(
			'page' => 'publikasi/buletin',
		);
		$this->load->view('layout/template',$data,false);	
	}

	public function listBuletin($bulan){
		$data = array(
			'page' => 'publikasi/buletin/'.$bulan,
		);
		$this->load->view('layout/template',$data,false);	
	}

	public function listArtikel(){
		$data = array(
			'page' => 'artikel/listArtikel',
		);
		$this->load->view('layout/template',$data,false);	
	}


	//SIMPAN DATA GEMPA
	public function simpan2(){
		$nilai = $this->input->post('gempa');
        $nilai = explode("==",$nilai);
        $data = array(

            'id'  => $nilai[0],
            'infogempa'   => $nilai[1],
        );

        $id = $nilai[0];
        $event = $nilai[1];
        $tabel = $nilai[3];
        $id_shakemap = $nilai[2];
        // $db = \Config\Database::connect();
		$this->load->database();
        $query = $this->db->query("SELECT infogempa FROM $tabel WHERE id='$id'");
        $row   = $query->row();
		echo $row->infogempa;
        if ($row != NULL) {
            
        } else {
            $query2 = $this->db->query("INSERT INTO $tabel (id,infogempa,id_shakemap) VALUES ('$id','$event','$id_shakemap')");
        }
		echo "hahaha";
    }

	//input Page Peringatan Dini Ngurah Rai
	public function inputPD(){
		$this->load->view('petir/inputPeringatanDini',false);	
	}

	public function prosesDataPD(){
		// $PD = $this->input->post('peringatanDini');

		// $PD = explode("PERINGATAN DINI CUACA" , $PD)[1];
		// $nomor = explode("NOMOR " , $PD)[1];
		// $nomor = explode("," , $nomor)[0];
		// $mulai = explode("BERLAKU TANGGAL  " , $PD)[1];
		// $mulai = explode(" SAMPAI DENGAN " , $mulai)[0];

		// $akhir = explode("SAMPAI DENGAN " , $PD)[1];
		// $akhir = explode(". BERDASARKAN" , $akhir)[0];

		// $pengamatan = explode("PENGAMATAN JAM " , $PD)[1];
		// $pengamatan = explode("," , $pengamatan)[0];

		// $peringatan = explode($pengamatan.", " , $PD)[1];
		// $peringatan = explode("." , $peringatan)[0];

		// $prakiraan = explode($peringatan.". " , $PD)[1];
		// $prakiraan = explode("." , $prakiraan)[0];
		
		// // echo $nomor;
		// // echo "<br>";
		// // echo $mulai;
		// // echo "<br>";
		// // echo $akhir;
		// // echo "<br>";
		// // echo $pengamatan;
		// // echo "<br>";
		// // echo $peringatan;
		// // echo "<br>";
		// // echo $prakiraan;

		// // var_dump($prakiraan);

		// $data = array(
		// 	'pd' => $this->input->post('peringatanDini'),
		// );
		// $this->load->view('petir/prosesPD',$data,false);	

		$pd = $this->input->post('peringatanDini');
		$pd = explode("PERINGATAN DINI CUACA" , $pd)[1];
		$nomor = explode("NOMOR " , $pd)[1];
		$nomor = explode("," , $nomor)[0];
		$mulai = explode("BERLAKU TANGGAL  " , $pd)[1];
		$mulai = explode(" SAMPAI DENGAN " , $mulai)[0];

		$akhir = explode("SAMPAI DENGAN " , $pd)[1];
		$akhir = explode(". BERDASARKAN" , $akhir)[0];

		$pengamatan = explode("PENGAMATAN JAM " , $pd)[1];
		$pengamatan = explode("," , $pengamatan)[0];

		$peringatan = explode($pengamatan.", " , $pd)[1];
		$peringatan = explode("." , $peringatan)[0];

		$prakiraan = explode($peringatan.". " , $pd)[1];
		$prakiraan = explode("." , $prakiraan)[0];
		// echo "<br>";
		// echo $nomor;
		// echo "<br>";
		// echo $mulai;
		// echo "<br>";
		// echo $akhir;
		// echo "<br>";
		// echo $pengamatan;
		// echo "<br>";
		// echo $peringatan;
		// echo "<br>";
		// echo $prakiraan;


		$isi =
		"<?xml version=\"1.0\" encoding=\"US-ASCII\" standalone=\"yes\"?>
		<!DOCTYPE peringatanDini [
		<!ELEMENT  peringatanDini EMPTY>
		<!ATTLIST peringatanDini
		nomor 		ID	#REQUIRED
		mulai		CDATA	#REQUIRED
		akhir		CDATA	#REQUIRED
		pengamatan    CDATA	#REQUIRED
		peringatan    CDATA   #REQUIRED
		prakiraan     CDATA   #REQUIRED
		>
		]>
		<peringatanDini nomor=\"$nomor\" mulai=\"$mulai\" akhir=\"$akhir\" pengamatan=\"$pengamatan\" peringatan=\"$peringatan\" prakiraan=\"$prakiraan\" />";


		//$buka = fopen("home/sysop/Music/event.xml", "w+");
		$fileXML = base_url('gambar/event.xml');
		$buka = fopen('peringatanDini.xml','w');
		if (!$buka)
		{
		echo "<p><b>Data belum terproses. Mohon dicoba lagi</b><p><html>";
		exit;
		}

		fwrite($buka, $isi);
		fclose($buka);

		// $this->load->view('petir/prosesPD',$data,false);	
		$url = base_url('peringatanDini.xml');
		header("Location: $url");
	}



}