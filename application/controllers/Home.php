<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function index()
    {
        $data['title'] = 'RT04/04 Jatipadang';
        $data['nav'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer', $data);
    }
}