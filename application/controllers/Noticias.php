<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Noticias extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->database();

        $data['news'] = $this->db->get('news')->result_array();
        $data['include'] = count($data['news']) >= 3 ? false : true;
        $this->template->load('portal', 'portal/news', $data);
    }

    public function cadastro()
    {
        $this->load->database();

        $data = $this->db->get('news')->result_array();
        $include = count($data) >= 3 ? redirect('noticias') : "";
        
        if ($this->input->post()) {
            $post = $this->input->post();
            $post['date'] = date('Y-m-d');
            $this->autoRender = false;

            if (isset($_FILES['image']) && strlen($_FILES['image']['name']) > 3) {
                $upload = $this->do_upload(false);
                $post['image'] = $upload['upload_data']['file_name'];
            }
            $this->db->insert("news", $post);
            redirect("noticias");

        } else {
            $this->template->load('portal', 'portal/news_register');
        }
    }

    public function excluir($id)
    {
        $this->autoRender = false;
        $this->load->database();
        $this->db->delete("news", array("news_id" => $id));
        $dir = $this->db->get_where("news", array("news_id" => $id))->row_array()['imagem'];
        if (file_exists($dir)) {
            unlink($dir);
        }
        redirect("noticias");
    }

    public function editar($id)
    {
        $this->load->database();
        $result = $this->db->get_where("news", array('news_id' => $id))->row_array();
        $data['new'] = $result;

        if ($this->input->post()) {
            $this->autoRender = false;
            $post = $this->input->post();
            $post['date'] = date('Y-m-d');

            if (isset($_FILES['image']) && strlen($_FILES['image']['name']) > 3) {
                $upload = $this->do_upload(true);
                $post['image'] = $upload['upload_data']['file_name'];
            }
            $this->db->update("news", $post, array('news_id' => $id));
            redirect("noticias");
        } else {
            $this->template->load('portal', 'portal/news_edit', $data);
        }
    }

    private function do_upload($overwrite)
    {
        $config['upload_path'] = './uploads/news';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 100;
        $config['overwrite'] = $overwrite;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            return array('error' => $this->upload->display_errors());
        } else {
            return array('upload_data' => $this->upload->data());
        }
    }
}