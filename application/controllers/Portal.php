<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function usuarios()
	{
		$this->load->database();

		$data['users'] = $this->db->get('users')->result_array();
		$this->template->load('portal', 'portal/users', $data);
	}

	public function cadastro()
	{
		$data['class'] = '';
		if ($this->input->post()) {
			$this->autoRender = false;
			$this->load->database();
			$post = $this->input->post();

			if ($post['password'] == $post['repeat']) {
				unset($post['repeat']);
				$post['password'] = password_hash($post['password'], PASSWORD_BCRYPT);
				$this->db->insert("users", $post);
				redirect("portal/usuarios");
			} else {
				$data['class'] = 'has-error';
			}
		} else {
			$this->template->load('portal', 'portal/users_register', $data);
		}
	}

	public function excluir($id)
	{
		$this->autoRender = false;
		$this->load->database();
		$this->db->delete("users", array("user_id" => $id));
		redirect("portal/usuarios");
	}

	public function editar($id)
	{
		$this->load->database();
		$result = $this->db->get_where("users", array('user_id' => $id))->row_array();
		$data['user'] = $result;
		$data['class'] = '';

		if ($this->input->post()) {
			$this->autoRender = false;
			$post = $this->input->post();

			if ($post['password'] == $post['repeat']) {
				unset($post['repeat']);
				$post['password'] = password_hash($post['password'], PASSWORD_BCRYPT);
				$this->db->update("users", $post, array("user_id" => $id));
				redirect("portal/usuarios");
			} else {
				$data['class'] = 'has-error';
			}
		} else {
			$this->template->load('portal', 'portal/users_edit', $data);
		}
	}
}
