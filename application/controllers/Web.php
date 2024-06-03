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



}