<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
		$this->load->library('PdfGenerator');
		$this->load->database();
		$data['records'] = [
			[
				"nm_dosen"=>"Dosen 1",
				"nidn"=>"NIDN 1",
				"kls"=>"1"
			],
			[
				"nm_dosen"=>"Dosen 2",
				"nidn"=>"NIDN 1",
				"kls"=>"2"
			],
			[
				"nm_dosen"=>"Dosen 3",
				"nidn"=>"NIDN 1",
				"kls"=>"2"
			],
			[
				"nm_dosen"=>"Dosen 4",
				"nidn"=>"NIDN 1",
				"kls"=>"3"
			],
			[
				"nm_dosen"=>"Dosen 5",
				"nidn"=>"NIDN 1",
				"kls"=>"3"
			],
			[
				"nm_dosen"=>"Dosen 6",
				"nidn"=>"NIDN 1",
				"kls"=>"3"
			],
			[
				"nm_dosen"=>"Dosen 7",
				"nidn"=>"NIDN 1",
				"kls"=>"4"
			],
			[
				"nm_dosen"=>"Dosen 8",
				"nidn"=>"NIDN 1",
				"kls"=>"4"
			],
			[
				"nm_dosen"=>"Dosen 9",
				"nidn"=>"NIDN 1",
				"kls"=>"4"
			],
			[
				"nm_dosen"=>"Dosen 10",
				"nidn"=>"NIDN 1",
				"kls"=>"4"
			],
			[
				"nm_dosen"=>"Dosen 11",
				"nidn"=>"NIDN 1",
				"kls"=>"5"
			],
			[
				"nm_dosen"=>"Dosen 12",
				"nidn"=>"NIDN 1",
				"kls"=>"5"
			],
			[
				"nm_dosen"=>"Dosen 13",
				"nidn"=>"NIDN 1",
				"kls"=>"5"
			],
			[
				"nm_dosen"=>"Dosen 14",
				"nidn"=>"NIDN 1",
				"kls"=>"5"
			],
			[
				"nm_dosen"=>"Dosen 15",
				"nidn"=>"NIDN 1",
				"kls"=>"5"
			],
			[
				"nm_dosen"=>"Dosen 16",
				"nidn"=>"NIDN 1",
				"kls"=>"5"
			],
			[			
				"nm_dosen"=>"Dosen 17",
				"nidn"=>"NIDN 1",
				"kls"=>"5"
			],
			[
				"nm_dosen"=>"Dosen 18",
				"nidn"=>"NIDN 1",
				"kls"=>"8"
			],
			[
				"nm_dosen"=>"Dosen 19",
				"nidn"=>"NIDN 1",
				"kls"=>"9"
			],
			[
				"nm_dosen"=>"Dosen 20",
				"nidn"=>"NIDN 1",
				"kls"=>"10"
			]
		];
		$data['table'] = [
			[
				"name"=>"nm_dosen",
				"caption"=>"Nama Dosen",
				"show"=>TRUE
			],
			[
				"name"=>"nidn",
				"caption"=>"NIDN",
				"show"=>TRUE
			],
			[
				"name"=>"kls",
				"caption"=>"Kelas",
				"show"=>TRUE
			]
		];
	    $html = $this->load->view('laporan', $data, true);
	    //$this->load->view('laporan', $data);
		$this->pdfgenerator->generateDompdf($html,'contoh');
		//$this->pdfgenerator->generateMpdf($html);
	}
}
