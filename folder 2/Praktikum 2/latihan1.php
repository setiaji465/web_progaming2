<?php
class latihan1 extends CI_Controller
{
	public function index()
	{
		echo "Welcome to Programming Web Class..";
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model('model_latihan1');
		$hasil = $this->model_latihan1->jumlah($n1, $n2); 
		echo "Hasil Penjumlahan dari".$n1."+".$n2."=".$hasil;
	}
}