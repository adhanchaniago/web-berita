<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->helper('cleanurl_helper');
		$this->load->model('model_berita');
		$this->load->library('pagination','form_validation');
		$this->load->helper(array('url','html','text'));
	}

	public function index()
	{
		$data['menu'] = $this->model_berita->menu();
		$data['berita'] = $this->model_berita->all();
$data['nasional'] = $this->model_berita->nasional();
$data['internasional'] = $this->model_berita->internasional();
$data['teknologi'] = $this->model_berita->teknologi();
$data['politik'] = $this->model_berita->politik();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
		$this->load->view('welcome_message', $data);
	}


public function detail($id=null)
	{
		if(!isset($id)) show_404();
		
		if ($data['hasil'] =$this->model_berita->detail_berita($id)) {
		
		$data['hasil'] = $this->model_berita->detail_berita($id);
		
		$data['politik'] = $this->model_berita->politik();
		$data['beritadetail'] = $this->model_berita->beritadetail();
		$data['menu'] = $this->model_berita->menu();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		$this->load->view('selengkapnya', $data);
		

		}

	}

	function error_not_found(){
	$data['menu'] = $this->model_berita->menu();
		$data['berita'] = $this->model_berita->all();
$data['nasional'] = $this->model_berita->nasional();
$data['internasional'] = $this->model_berita->internasional();
$data['teknologi'] = $this->model_berita->teknologi();
$data['politik'] = $this->model_berita->politik();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
		$this->load->view('welcome_message', $data);
		}
	
	public function internasional()
	{
		$data['internasionallagi'] = $this->model_berita->internasional1();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		
		$data['semuainter'] = $this->model_berita->semuaberinter();
		$data['iklan'] = $this->model_berita->iklanku();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('internasional', $data);
	}

	public function nasional()
	{
		$data['iklan'] = $this->model_berita->iklanku();
		$data['internasionallagi'] = $this->model_berita->nasional1();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		$data['semuainter'] = $this->model_berita->allbernasional();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('nasional', $data);
	}

	public function teknologi()
	{
		$data['teknologi'] = $this->model_berita->teknologi1();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		$data['semuatekno'] = $this->model_berita->allberteknologi();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('teknologi', $data);
	}

	public function politik()
	{
		$data['politik1'] = $this->model_berita->politik1();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();
		$data['sm_politik'] = $this->model_berita->smpolitik();
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('b_politik', $data);
	}

	public function kesehatan()
	{
		$data['kesehatan1'] = $this->model_berita->kesehatanbrs1();
		$data['smkes'] = $this->model_berita->smukes();
		$data['berterbaru_pginter'] = $this->model_berita->beritaterbaruinter();

		
		$data['konfigurasi'] = $this->model_berita->konfigurasi();
			$data['menu'] = $this->model_berita->menu();
		$this->load->view('kesehatan', $data);
	}

}

/* https://caramengatasimasalahmu.blogspot.com */
/* ColorlIb*/