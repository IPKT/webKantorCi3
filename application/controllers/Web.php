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

	//BERANDA
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

	// PUBLIKASI
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

	//INPUT PAGE PERINGATAN DINI
	public function inputPD(){
		$this->load->view('petir/inputPeringatanDini',false);	
	}

	public function createXmlCuaca(){
		$nomor = "1";
		$mulai = "24 APRIL 2024 JAM 15.11 WITA";
		$akhir = "24 APRIL 2024 JAM 16.11 WITA";
		$pengamatan = "15.11 WITA";
		$peringatan = "TERJADI BADAI GUNTUR";

		$dom = new DOMDocument();
		$dom->encoding = 'utf-8';
		$dom->xmlVersion = '1.0';
		$dom->formatOutput = true;
		$xml_file_name = 'PDCuaca.xml';
		$root = $dom->createElement('peringatanDini');
		$attr_root = new DOMAttr('jenis', 'cuaca');
		$root->setAttributeNode($attr_root);
		$nomor_node = $dom->createElement('Nomor', $nomor);
		$root->appendChild($nomor_node);
		$mulai_node = $dom->createElement('Mulai', $mulai);
		$root->appendChild($mulai_node);
		$akhir_node = $dom->createElement('Akhir', $akhir);
		$root->appendChild($akhir_node);
		$pengamatan_node = $dom->createElement('Pengamatan', $pengamatan);
		$root->appendChild($pengamatan_node);
		$peringatan_node = $dom->createElement('Peringatan', $peringatan);
		$root->appendChild($peringatan_node);
		$dom->appendChild($root);
		$dom->save("xml/".$xml_file_name);
		echo "$xml_file_name has been successfully created";
	}

	public function prosesPDCuaca(){
		$pd = $this->input->post('peringatanDini');
		$pd = explode("PERINGATAN DINI CUACA" , $pd);
		$sandi= $pd[0];
		$pd = $pd[1];
		if ($pd == NULL) {
			return "gagal";
		}
		$nomor = explode("NOMOR " , $pd);
		$nomor = $nomor[1];
		$nomor = explode("," , $nomor);
		$nomor = $nomor[0];
		$mulai = explode("BERLAKU TANGGAL  " , $pd);
		$mulai = $mulai[1];
		$mulai = explode(" SAMPAI DENGAN  " , $mulai);
		$mulai = $mulai[0];


		$akhir = explode("SAMPAI DENGAN  " , $pd);
		$akhir = $akhir[1];
		$akhir = explode(". BERDASARKAN" , $akhir);
		$akhir = $akhir[0];

		$pengamatan = explode("PENGAMATAN JAM " , $pd);
		$pengamatan = $pengamatan[1];
		$pengamatan = explode("," , $pengamatan);
		$pengamatan = $pengamatan[0];

		$peringatan = explode($pengamatan.", " , $pd);
		$peringatan = $peringatan[1];
		$peringatan = explode(". " , $peringatan);
		$prakiraan = $peringatan[1];
		$peringatan = $peringatan[0];

		$dom = new DOMDocument();
		$dom->encoding = 'utf-8';
		$dom->xmlVersion = '1.0';
		$dom->formatOutput = true;
		$xml_file_name = 'PeringatanDiniCuaca.xml';
		$root = $dom->createElement('PeringatanDini');
		$attr_root = new DOMAttr('jenis', 'cuaca');
		$root->setAttributeNode($attr_root);
		$nomor_node = $dom->createElement('Nomor', $nomor);
		$root->appendChild($nomor_node);
		$mulai_node = $dom->createElement('Mulai', $mulai);
		$root->appendChild($mulai_node);
		$akhir_node = $dom->createElement('Akhir', $akhir);
		$root->appendChild($akhir_node);
		$pengamatan_node = $dom->createElement('Pengamatan', $pengamatan);
		$root->appendChild($pengamatan_node);
		$peringatan_node = $dom->createElement('Peringatan', $peringatan);
		$root->appendChild($peringatan_node);
		$prakiraan_node = $dom->createElement('Prakiraan', $prakiraan);
		$root->appendChild($prakiraan_node);
		$sandi_node = $dom->createElement('Sandi', $sandi);
		$root->appendChild($sandi_node);
		$dom->appendChild($root);
		$dom->save("xml/".$xml_file_name);
		return "sukses";
		
		

	}

	public function prosesPDWindShear(){
		$ws = $this->input->post('windShear');
		$ws = explode("PERINGATAN DINI", $ws);
		$sandi= $ws[0];
		$ws = $ws[1];
		if ($ws == NULL) {
			return "gagal";
		}
		$nomor = explode("NOMOR " , $ws);
		$nomor = $nomor[1];
		$nomor = explode("," , $nomor);
		$nomor = $nomor[0];
		$mulai = explode("BERLAKU TANGGAL  " , $ws);
		$mulai = $mulai[1];
		$mulai = explode(" SAMPAI DENGAN  " , $mulai);
		$mulai = $mulai[0];
	
		$akhir = explode("SAMPAI DENGAN  " , $ws);
		$akhir = $akhir[1];
		$akhir = explode(". BERDASARKAN" , $akhir);
		$akhir = $akhir[0];

		
		$pengamatan = explode("PENGAMATAN JAM " , $ws);
		$pengamatan = $pengamatan[1];
		$pengamatan = explode("," , $pengamatan);
		$pengamatan = $pengamatan[0];

		$peringatan = explode($pengamatan.", " , $ws);
		$peringatan = $peringatan[1];

		$dom = new DOMDocument();
		$dom->encoding = 'utf-8';
		$dom->xmlVersion = '1.0';
		$dom->formatOutput = true;
		$xml_file_name = 'PeringatanDiniWindShear.xml';
		$root = $dom->createElement('PeringatanDini');
		$attr_root = new DOMAttr('jenis', 'windShear');
		$root->setAttributeNode($attr_root);
		$nomor_node = $dom->createElement('Nomor', $nomor);
		$root->appendChild($nomor_node);
		$mulai_node = $dom->createElement('Mulai', $mulai);
		$root->appendChild($mulai_node);
		$akhir_node = $dom->createElement('Akhir', $akhir);
		$root->appendChild($akhir_node);
		$pengamatan_node = $dom->createElement('Pengamatan', $pengamatan);
		$root->appendChild($pengamatan_node);
		$peringatan_node = $dom->createElement('Peringatan', $peringatan);
		$root->appendChild($peringatan_node);
		$sandi_node = $dom->createElement('Sandi', $sandi);
		$root->appendChild($sandi_node);
		$dom->appendChild($root);
		$dom->save("xml/".$xml_file_name);
		return "sukses";
	}


	public function prosesDataPD(){
		$status_pd_cuaca = "";
		$status_pd_ws = "";
		// PROSES PERINGATAN DINI CUACA
		
		
		if ($this->input->post('peringatanDini') != NULL) {
			try {
				
				$status_pd_cuaca = $this->prosesPDCuaca();
			} catch (Exception $error) {
				$status_pd_cuaca = "gagal";
			}

					}

		// PROSES WINDSHEAR
		if ($this->input->post("windShear") != NULL) {

			try {
				
				$status_pd_ws = $this->prosesPDWindShear();
			} catch (Exception $error) {
				echo 'Message: ' .$e->getMessage();
			}
			
		}

		if ($status_pd_cuaca == "sukses" || $status_pd_ws =="sukses") {
			$this->load->view('petir/showXml',false);	
			
		}else{
			echo "XML gagal diproses silahkan cek format ";
		}

	}





}