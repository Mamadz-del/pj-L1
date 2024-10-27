<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        is_logged_in();

        $this->data['tb_users'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function index() {
        redirect('admin/beranda');
    }

    public function profile() {
        $this->load->view('templates/admin_header', $this->data);
        $this->load->view('profile', $this->data);   
    }

    public function beranda() {
        $this->load->view('templates/admin_header', $this->data);
        $this->load->view('admin');
    }

    public function pendaftaran() {
        $this->load->model('PendaftaranModel');
        $this->data['tb_pendaftaran'] = $this->PendaftaranModel->getPendaftaran();

        $this->load->view('templates/admin_header', $this->data);
        $this->load->view('pendaftaran', $this->data);
    }

    public function event() {
        $this->load->model('EventModel');
        $this->data['tb_jns_lomba'] = $this->EventModel->getEvents();
        
        $this->load->view('templates/admin_header', $this->data);
        $this->load->view('event', $this->data);
    }

}