<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cinema extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('view-input-cinema');
	}

	public function addcinema()
	{
		$nama = $this->input->post('nama');
		$judul = $this->input->post('judul');
		$pukul = $this->input->post('pukul');
		$tipe = $this->input->post('tipe');
		$jumlah = $this->input->post('jumlah');

		// var_dump($tipe);
		// die;

		if($tipe == "Reguler 2D"){
			$harga_tiket = 40000;
		}else if($tipe == "3D"){
			$harga_tiket = 80000;
		}else if($tipe == "velvet"){
			$harga_tiket = 100000;
		}
		
		$total_harga = $jumlah * $harga_tiket;

		$data = [
			'nama' => $nama,
			'judul' => $judul,
			'pukul' => $pukul,
			'tipe' => $tipe,
			'jumlah' => $jumlah,
			'harga' => $harga_tiket,
			'total' => $total_harga,
		];

		return $this->load->view('view-output-cinema', $data);
	}
}