<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index(){
        $data['title'] = 'MSI';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Admin_model','aModel');
        $data['msi'] = $this->aModel->getAllMSI();

        if ($this->input->post('name') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/msi/index', $data);
            $this->load->view('templates/footer');
        }

        else{
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '5120'; // 5MB
            $config['upload_path'] = './assets/img/products/msi/';

            $this->load->library('upload', $config);
            $image_size = $_FILES['image']['size']; // Get the size of the uploaded image

            if (!$this->upload->do_upload('image')){
                $error = array('error' => $this->upload->display_errors());
            }
            else{
                $image =  $this->upload->data();
                $image =  $image['file_name'];
                $name = $this->input->post('name', true);
                $price = $this->input->post('price', true);
                $description = $this->input->post('description', true);
                $is_active = $this->input->post('is_active', true);

                isset($is_active) ? $is_active = 1 : $is_active = 0;
                
                $data = array(
                    'name' => $name,
                    'price' => $price,
                    'description' => $description,
                    'image' => $image,
                    'is_active' => $is_active
                );
                $this->db->insert('msi', $data);
                $this->session->set_flashdata('add_msi','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Produk baru berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect(base_url());
            }
        }
    }
    
    public function edit_msi($id) {
        $data['title'] = 'Edit Product MSI';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
        $this->load->model('Admin_model', 'aModel');
    
        // Get MSI data by ID
        $data['msi'] = $this->aModel->getMSIById($id);
    
        if ($this->input->post('description') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/msi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->aModel->updatePMSI();
    
            $this->session->set_flashdata('edit_msi', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your announcement has been sent!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin');
        }
    }

    public function delete_msi($id){
        $this->load->model('Admin_model','aModel');
        $this->aModel->deleteMsi($id);
        $this->session->set_flashdata('delete_msi','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Produk berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url());   
    }

    public function others(){
        $data['title'] = 'Others';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Others_model','oModel');
        $data['others'] = $this->oModel->getAllOthers();

        if ($this->input->post('name') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/others/index', $data);
            $this->load->view('templates/footer');
        }

        else{
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/products/others/';

            $this->load->library('upload', $config);

            if(! $this->upload->do_upload('image')){
                $error = array('error' => $this->upload->display_errors());
            }
            else{
                $image =  $this->upload->data();
                $image =  $image['file_name'];
                $name = $this->input->post('name', true);
                $price = $this->input->post('price', true);
                $description = $this->input->post('description', true);
                $is_active = $this->input->post('is_active', true);

                isset($is_active) ? $is_active = 1 : $is_active = 0;
                
                $data = array(
                    'name' => $name,
                    'price' => $price,
                    'description' => $description,
                    'image' => $image,
                    'is_active' => $is_active
                );
                $this->db->insert('lainnya', $data);
                $this->session->set_flashdata('add_others','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Produk baru berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect(base_url('admin/others'));
            }
        }
    }
    
    public function edit_others($id) {
        $data['title'] = 'Edit Product Others';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
        $this->load->model('Others_model', 'oModel');
    
        $data['others'] = $this->oModel->getOthersById($id);
    
        if ($this->input->post('description') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/others/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->oModel->updatePOthers();
    
            $this->session->set_flashdata('edit_others', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your announcement has been sent!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('admin/others'));   
        }
    }

    public function delete_others($id){
        $this->load->model('Others_model','oModel');
        $this->oModel->deleteOthers($id);
        $this->session->set_flashdata('delete_others','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Produk berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('admin/others'));   
    }
    
   
    
}
