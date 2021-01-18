<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kartu_model');
    }

    public function index()
    {
        $data['kartu'] = $this->Kartu_model->viewKartu();
        $this->load->view('kartu', $data);
    }

    
    public function tambah()
    {
        $validation = $this->form_validation; 

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('telp', 'Telp', 'required');
        $validation->set_rules('email', 'Email', 'required');
        $validation->set_rules('alamat', 'Alamat', 'required');

        if($validation->run() == FALSE) 
        {
            $this->load->view('tambah');
        } else {
        $this->Kartu_model->tambahKartu();
        redirect('kartu');
        }
        
    }

    public function hapus($id)
    {
        $this->Kartu_model->hapus($id);
        redirect('kartu');
    }

    public function ubah($id)
    {
        $validation = $this->form_validation; 
        $data['kartu'] = $this->Kartu_model->getById($id);

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('telp', 'Telp', 'required');
        $validation->set_rules('email', 'Email', 'required');
        $validation->set_rules('alamat', 'Alamat', 'required');

        if ($validation->run() == FALSE) 
        {
            $this->load->view('ubah', $data);
        } else {
            $this->Kartu_model->ubahKartu();
            redirect('kartu');
        }
    }

}