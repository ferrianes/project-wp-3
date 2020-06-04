<?php
defined('BASEPATH') or exit('No Direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        cek_login();
        cek_user();
    }

    public function index() {
        $data['title'] = 'Dashboard';
        // $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        // $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        // $data['buku'] = $this->ModelBuku->getBuku()->result_array();

        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_navbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/dash_footer', $data);
        
    }
}