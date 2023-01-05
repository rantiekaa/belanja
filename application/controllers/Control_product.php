<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library('session');
	}

	public function add_product()
	{
		extract($_POST);

		$config['upload_path']          = './assets/general/custom/product/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			// $error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('err', 'Image error');
			redirect(base_url('backend/product'));
		} else {
			$image = array('upload_data' => $this->upload->data());

			$config['image_library']    = 'gd2';
			$config['source_image']     = './assets/general/custom/product/' . $image['upload_data']['file_name'];
			$config['new_image']        = './assets/general/custom/product/thumbs';
			$config['create_thumb']     = TRUE;
			$config['maintain_ratio']   = TRUE;
			$config['width']            = 500;
			$config['height']           = 500;
			$config['thumb_marker']     = '';

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$data = $_POST + array(
				'handle' => url_title($title, 'dash', TRUE),
				'image' => $image['upload_data']['file_name'],
				'create_at' => date("Y-m-d H:i:s")
			);

			$this->Backend_product->add($data);
			$this->session->set_flashdata('success', 'Product Added.');
			redirect(base_url('backend/product'));
		}
	}

	public function edit_product()
	{
		extract($_POST);
		$config['upload_path']          = './assets/general/custom/product/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;

		$this->load->library('upload', $config);

		$imageEdit = array();

		if ($this->upload->do_upload('image')) {
			$image = array('upload_data' => $this->upload->data());

			$config['image_library']    = 'gd2';
			$config['source_image']     = './assets/general/custom/product/' . $image['upload_data']['file_name'];
			$config['new_image']        = './assets/general/custom/product/thumbs';
			$config['create_thumb']     = TRUE;
			$config['maintain_ratio']   = TRUE;
			$config['width']            = 500;
			$config['height']           = 500;
			$config['thumb_marker']     = '';

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$imageEdit = array(
				'handle' => url_title($title, 'dash', TRUE),
				'image' => $image['upload_data']['file_name']
			);
		}

		$data = $_POST + array('update_at' => date("Y-m-d H:i:s")) + $imageEdit;

		$this->Backend_product->edit($data, $id);
		$this->session->set_flashdata('success', 'Product Edited.');
		redirect(base_url('backend/product'));
	}

	public function delete_product($id)
	{
		$this->Backend_product->delete_imageAll($id);
		$this->Backend_product->delete($id);
		$this->session->set_flashdata('success', 'Product Deleted.');
		redirect(base_url('backend/product'));
	}

	public function add_image()
	{
		extract($_POST);

		$config['upload_path']          = './assets/general/custom/product/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			$image = array('upload_data' => $this->upload->data());

			$config['image_library']    = 'gd2';
			$config['source_image']     = './assets/general/custom/product/' . $image['upload_data']['file_name'];
			$config['new_image']        = './assets/general/custom/product/thumbs';
			$config['create_thumb']     = TRUE;
			$config['maintain_ratio']   = TRUE;
			$config['width']            = 500;
			$config['height']           = 500;
			$config['thumb_marker']     = '';

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$data = array(
				'id_product' => $id,
				'image' => $image['upload_data']['file_name'],
				'create_at' => date("Y-m-d H:i:s")
			);

			$this->Backend_product->addImage($data);
			$this->session->set_flashdata('success', 'Image Added.');
			redirect(base_url('backend/image_product/' . $id));
		}
	}

	public function delete_image($id, $id_product)
	{
		$this->Backend_product->delete_image($id);
		$this->session->set_flashdata('success', 'Image Deleted.');
		redirect(base_url('backend/image_product/' . $id_product));
	}
}
