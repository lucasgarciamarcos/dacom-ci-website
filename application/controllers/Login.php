<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $data['text'] = "";
        if ($this->input->post()) {
            $this->load->database();
            $data = $this->input->post();

            $result = $this->db->get_where("users", array('username' => $data['username']))->row();

            if (isset($result->username) && password_verify($data['password'], $result->password)) {
                $this->autoRender = false;

                $result->session = md5(date('YmdHis'));

                $this->db->update("users", $result, array("user_id" => $result->user_id));

                $this->session->user = $result;
                
                redirect('mensagens');
            } else {
                $data['text'] = "Usuário ou senha incorreto (s)";
            }
        } else {
            $this->session->sess_destroy();
            $this->template->load('default', 'home/login', $data);
        }
    }

}
