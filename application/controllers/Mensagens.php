<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mensagens extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->database();

        $data['messages'] = $this->db->get('messages')->result_array();
        $this->template->load('portal', 'portal/messages', $data);
    }

    public function excluir($id)
    {
        $this->autoRender = false;
        $this->load->database();
        $this->db->delete("messages", array("message_id" => $id));
        redirect("mensagens");
    }
}