<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->database();

        $userDB = $this->db->get_where("users", array('user_id' => $this->session->user->user_id))->row();

        if (!isset($this->session->user) || $userDB->session != $this->session->user->session) {
            redirect('login');
        }
    }
}