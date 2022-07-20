<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('ModelCrud');
	}

	public function pageHome(){
		$data['query'] = $this->ModelCrud->page();
		$this->load->view('home', $data);
	}

	public function pageProducts(){
		$data['query'] = $this->ModelCrud->page();
		$this->load->view('category', $data);
	}

	public function pageWinter(){
		$jenis = 'Winter';
		$data['query'] = $this->ModelCrud->pageSpesifik($jenis);
		$this->load->view('winter', $data);
	}

	public function pageSummer(){
		$jenis = 'Summer';
		$data['query'] = $this->ModelCrud->pageSpesifik($jenis);
		$this->load->view('summer', $data);
	}

	public function pageContact(){
		$this->load->view('contact');
	}

	public function pageCart(){
		$data['query'] = $this->ModelCrud->pageCart();
		$this->load->view('cart', $data);
	}

	public function pageDetail(){
		$id = $this->uri->segment(3);
		$data['query'] = $this->ModelCrud->detail($id);
		$this->load->view('single-product', $data);
	}

	public function save(){
		$data = array('id' => $this->input->post('id'),'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'), 'jenis' => $this->input->post('jenis'), 'jumlah' => $this->input->post('jumlah'));

		$proses = $this->ModelCrud->save($data);
		if (!$proses){
			header('Location: pageCart');
		} else {
			echo "Data Gagal disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/pageProducts')."'>Kembali ke form</a>";
		}
	}

	public function edit(){
		$no = $this->uri->segment(3);
		$data['query'] = $this->ModelCrud->edit($no);
		$this->load->view('edit', $data);
	}

	public function update(){
		$no = $this->input->post('no');
		$data = array('jumlah' => $this->input->post('jumlah'));

		$proses = $this->ModelCrud->update($no, $data);
		if (!$proses){
			header('Location: pageCart');
		} else {
			echo "Data Gagal diubah";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/pageCart/')."'>Kembali ke Cart</a>";
		}
	}

	public function delete(){
		$no = $this->uri->segment(3);
		$proses = $this->ModelCrud->delete($no);
		if (!$proses){
			redirect(base_url('index.php/crud/pageCart'));
		} else {
			echo "Data Gagal dihapus";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/pageCart/')."'>page data</a>";
		}
	}
}
