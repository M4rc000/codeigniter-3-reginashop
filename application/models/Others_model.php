<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Others_model extends CI_Model
{

    // CREATE DATA
    public function insertOthersData($data)
    {
        $this->db->insert('lainnya', $data);
    }
    // END OF CREATE DATA


    // READ DATA
    public function getAllOthers()
    {
        return $this->db->get('lainnya')->result_array();
    }
    
    public function getOthersById($id)
    {
        return $this->db->get_where('lainnya',['id' => $id])->row_array();
    }
    // END OF READ DATA 


    // UPDATE DATA
    public function updatePOthers()
{
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $price = $this->input->post('price');
    $description = $this->input->post('description');
    $is_active = $this->input->post('is_active');

    isset($is_active) ? $is_active = 1 : $is_active = 0;

    // Get the old image name from the database
    $old_image = $this->db->get_where('lainnya', ['id' => $id])->row('image');

    // Check if there's an image to upload
    $upload_image = $_FILES['image']['name'];

    if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/products/others/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            // Unlink or delete the old image if it's not the default image
            if ($old_image != 'default.jpg') {
                unlink('./assets/img/products/others/' . $old_image);
            }

            $new_image = $this->upload->data('file_name');
            $this->db->set('image', $new_image);
        } else {
            echo $this->upload->display_errors();
        }
    }

    $this->db->set('name', $name);
    $this->db->set('price', $price);
    $this->db->set('description', $description);
    $this->db->set('is_active', $is_active);

    $this->db->where('id', $id);
    $this->db->update('lainnya');
}

    // END OF UPDATE DATA


    // DELETE DATA
    public function deleteOthers($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('lainnya');
    }
    // END OF DELETE DATA

}