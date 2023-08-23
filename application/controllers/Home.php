<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index(){
        $this->load->model('Admin_model','aModel');
        $this->load->model('Others_model','oModel');
    
        $this->load->library('pagination');
    
        // MSI Pagination
        $msiConfig['base_url'] = 'http://localhost/2023/E-Commerce/home/index/';
        $msiConfig['total_rows'] = $this->aModel->countAllMSI();
        $msiConfig['per_page'] = 6;
    
        $this->pagination->initialize($msiConfig);
    
        $msiStart = $this->uri->segment(3);
        $data['msi'] = $this->aModel->getMSI($msiConfig['per_page'], $msiStart);
    
        // Others Pagination
        $othersConfig['base_url'] = 'http://localhost/2023/E-Commerce/home/index/';
        $othersConfig['total_rows'] = $this->oModel->countAllOthers(); // Assuming you have a method to count other items
        $othersConfig['per_page'] = 6;
    
        $this->pagination->initialize($othersConfig);
    
        $othersStart = $this->uri->segment(3); // Adjust the segment number according to your URL structure
        $data['others'] = $this->oModel->getOthers($othersConfig['per_page'], $othersStart); // Adjust the method name accordingly
    
        $this->load->view('index', $data);
    }
    
}