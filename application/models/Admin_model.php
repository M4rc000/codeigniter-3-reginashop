<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    // CREATE DATA
    public function insertMsiData($data)
    {
        $this->db->insert('msi', $data);
    }
    // END OF CREATE DATA


    // READ DATA
    public function getAllMSI()
    {
        return $this->db->get('msi')->result_array();
    }

    public function getAllOthers()
    {
        return $this->db->get('lainnya')->result_array();
    }
    
    public function getMSIById($id)
    {
        return $this->db->get_where('msi',['id' => $id])->row_array();
    }

    public function getLainnyaById($id)
    {
        return $this->db->get_where('lainnya',['id' => $id])->row_array();
    }
    // END OF READ DATA 


    // UPDATE DATA
    public function updatePMSI()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $description = $this->input->post('description');
        $is_active = $this->input->post('is_active');
    
        isset($is_active) ? $is_active = 1 : $is_active = 0;
    
        // Get the old image name from the database
        $old_image = $this->db->get_where('msi', ['id' => $id])->row('image');
    
        // Check if there's an image to upload
        $upload_image = $_FILES['image']['name'];
    
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/products/msi/';
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('image')) {
                // Unlink or delete the old image if it's not the default image
                if ($old_image != 'default.jpg') {
                    unlink('./assets/img/products/msi/' . $old_image);
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
        $this->db->update('msi');
    }
    
    // END OF UPDATE DATA


    // DELETE DATA
    public function deleteMsi($id)
{
    $old_image = $this->db->get_where('msi', ['id' => $id])->row('image');

    if ($old_image != 'default.jpg') {
        // Unlink the old image from the directory
        unlink('./assets/img/products/msi/' . $old_image);
    }

    $this->db->where('id', $id);
    $this->db->delete('msi');
}

    // END OF DELETE DATA


    public function getCourses($limit,$start)
    {
        return $this->db->get('user_courses',$limit,$start)->result_array();
    }

    public function countAllCourses()
    {
        return $this->db->get('user_courses')->num_rows();
    }

    public function getCoursesById($id)
    {
        return $this->db->get_where('user_courses',['id' => $id])->row_array();
        
    }

    public function getAttendanceById($id)
    {
        return $this->db->get_where('user_attendance',['id' => $id])->row_array();
        
    }

    public function editAnnouncement()
    {
        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "announcement" => $this->input->post('announcement',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_courses',$data);
    }
    
    public function deleteAnnouncement($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user_courses');
    }

    public function editMaterial()
    {
        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "material" => $this->input->post('material',true),
            "assignment" => $this->input->post('assignment',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_courses',$data);
    }

    public function editCourses()
    {
        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "submit_assignment" => $this->input->post('submit_assignment',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_courses',$data);
    }




}