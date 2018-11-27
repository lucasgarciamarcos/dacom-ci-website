<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->database();
		$data['msg'] = '0';

		if ($this->input->post()) {
			$data['post'] = $this->input->post();
			$this->db->insert('messages', $data['post']);
			$data['msg'] = '1';
		}

		$data['table'] = $this->db->get_where('news', array('LENGTH(image) >' => '3'), 3)->result_array();
		$this->template->load('default', 'home/home', $data);
	}

	public function noticia($id)
	{
		$this->load->database();
		$data['new'] = $this->db->get_where('news', array('news_id' => $id))->row_array();
		$this->template->load('default', 'home/new', $data);
	}

	public function noticias()
	{
		$this->load->database();
		$this->db->order_by('date', 'DESC');
		$data['news'] = $this->db->get('news')->result_array();
		$this->template->load('default', 'home/news', $data);
	}

}
