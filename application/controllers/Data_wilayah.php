<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_wilayah extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) redirect('auth');
		$this->Access_block_model->block_pengurus();
		$this->load->model('data_wilayah_model');
		$this->load->model('data_penempatan_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Wilayah/Asrama',
			'wilayah' => $this->data_wilayah_model->lihat_wilayah()->result()
		];
		// var_dump($data);
		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/data_wilayah/data_wilayah', $data);
		$this->load->view('templates/footer_dashboard');
	}

	public function tambah_wilayah()
	{

		$data = [
			'title' => 'Data Wilayah/Rayon',

		];


		$this->form_validation->set_rules('kode_wilayah', 'Kode Wilayah', 'required', array('required' => 'Kode Wilayah wajib diisi'));
		$this->form_validation->set_rules('nama_wilayah', 'nama Wilayah', 'required', array('required' => 'Nama Wilayah wajib diisi'));

		if ($this->form_validation->run() != false) {

			$data = array(
				'singkatan_wilayah' => $this->input->post('kode_wilayah'),
				'nama_wilayah' =>   $this->input->post('nama_wilayah')
			);

			$this->data_wilayah_model->tambah_wilayah($data);
			redirect('data_wilayah');
		} else {
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('content/data_wilayah/tambah_data_wilayah', $data);
			$this->load->view('templates/footer_dashboard');
		}



		// echo "ini tambah wilayah";


	}
	public function ubah_wilayah($id)
	{
		$where = array('id_wilayah' => $id);
		$data = [
			'title' => 'Ubah Wilayah',
			'wilayah' => $this->data_wilayah_model->ubah_wilayah($where)->result()

		];

		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/data_wilayah/ubah_data_wilayah', $data);
		$this->load->view('templates/footer_dashboard');
		// var_dump($data);

	}
	public function update_wilayah()
	{
		$this->form_validation->set_rules('id_wilayah', 'Kode Wilayah', 'required', array('required' => 'Kode Wilayah wajib diisi'));
		$this->form_validation->set_rules('kode_wilayah', 'Kode Wilayah', 'required', array('required' => 'Kode Wilayah wajib diisi'));
		$this->form_validation->set_rules('nama_wilayah', 'nama Wilayah', 'required', array('required' => 'Nama Wilayah wajib diisi'));
		if ($this->form_validation->run() != false) {
			$where = array(
				'id_wilayah' => $this->input->post('id_wilayah')
			);

			$data = array(
				'singkatan_wilayah' => $this->input->post('kode_wilayah'),
				'nama_wilayah' => $this->input->post('nama_wilayah')
			);
			$this->data_wilayah_model->update_wilayah($where, $data);
			redirect('data_wilayah');
		} else {

			$where = array(
				'id_wilayah' => $this->input->post('id_wilayah')
			);
			$data = [
				'title' => 'Ubah Wilayah',
				'wilayah' => $this->data_wilayah_model->ubah_wilayah($where)->result()
			];
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('content/data_wilayah/ubah_data_wilayah', $data);
			$this->load->view('templates/footer_dashboard');
		}
	}

	public function hapus_wilayah($id)
	{
		$where = array('id_wilayah' => $id);

		$this->data_wilayah_model->hapus_wilayah($where);
		$this->data_penempatan_model->hapus_wilayah($id);
		redirect(base_url('data_wilayah'));
	}




	// ini bagian manajemen kamar


	public function list_kamar()
	{

		$data = [
			'title' => 'Data Kamar',
			'wilayah' => $this->data_wilayah_model->lihat_wilayah()->result(),
			// 'kamar' => $this->data_wilayah_model->lihat_kamar()

		];
		// var_dump($data);


		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/data_wilayah/data_kamar', $data);
		$this->load->view('templates/footer_dashboard');
		// echo "ini list kamaar ";

	}
	public function tambah_kamar()
	{

		$this->form_validation->set_rules('nama_wilayah', 'Nama Wilayah', 'required', array('required' => 'Kolom Wilayah Wajib diisi!'));
		$this->form_validation->set_rules('nama_kamar', 'Nama Kamar', 'required', array('required' => 'Nama Kamar Wajib diisi!'));

		if ($this->form_validation->run() != false) {

			$data = array(
				'wilayah' => $this->input->post('nama_wilayah'),
				'nama_kamar' => $this->input->post('nama_kamar')

			);

			// var_dump($data);
			$this->data_wilayah_model->tambah_kamar($data);
			redirect('data_wilayah/list_kamar');
		} else {
			$data = [
				'title' => ' Tambah Data Kamar',
				'wilayah' => $this->data_wilayah_model->lihat_wilayah()->result(),
				'kamar' => 'query'

			];


			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('content/data_wilayah/tambah_data_kamar', $data);
			$this->load->view('templates/footer_dashboard');
		}
	}

	public function ubah_kamar($id)
	{


		$where = $id;
		$data = [
			'title' => 'Ubah Wilayah',
			'kamar' => $this->data_wilayah_model->ubah_kamar($where)->result(),
			'load_wilayah' => $this->data_wilayah_model->lihat_wilayah()

		];
		// echo "testing";

		// var_dump($data);
		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/data_wilayah/ubah_data_kamar', $data);
		$this->load->view('templates/footer_dashboard');
	}
	public function update_kamar()
	{
		// $this->form_validation->set_rules('id_kamar' , 'Id Kamar' , 'required');
		$this->form_validation->set_rules('nama_kamar', 'Nama Kamar', 'required', array('required' => 'Nama Kamar Wajib diisi!'));

		if ($this->form_validation->run() != false) {

			$where = array(
				'id_kamar' => $this->input->post('id_kamar')
			);

			$data = array(
				'id_kamar' => $id = $this->input->post('id_kamar'),
				'nama_kamar' => $this->input->post('nama_kamar')

			);

			var_dump($data, $where);
			$this->data_wilayah_model->update_kamar($where, $data);
			redirect('data_wilayah/list_kamar');
			# code...
		} else {


			$where = $this->input->post('id_kamar');
			$data = [
				'title' => 'Ubah Wilayah',
				'kamar' => $this->data_wilayah_model->ubah_kamar($where)->result(),
				'load_wilayah' => $this->data_wilayah_model->lihat_wilayah()
			];

			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('content/data_wilayah/ubah_data_kamar', $data);
			$this->load->view('templates/footer_dashboard');
		}
	}
	// update masih belum
	public function hapus_kamar($id)
	{

		$where = array('id_kamar' => $id);

		$this->data_wilayah_model->hapus_kamar($where);
		$this->data_penempatan_model->hapus_kamar($id);
		redirect(base_url('data_wilayah/list_kamar'));
	}
}
       
    // echo "ini tambah kamaar ";

    

/* End of file Data_wilayah.php and path \application\controllers\Data_wilayah.php */
