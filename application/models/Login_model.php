<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    
    function login($username_user, $password_user)
    {
        $this->db->select('id,firstname,lastname,middlename,type,department,username,password,email,dateregistered');
        $this->db->from('user');
        $this->db->where('username', $username_user);
        $this->db->where('password', md5($password_user));
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function register()
    {
        $this->load->library('form_validation');
        $firstname_user      = $this->input->post('firstname');
        $lastname_user       = $this->input->post('lastname');
        $middlename_user     = $this->input->post('middlename');
        $type_user           = $this->input->post('type');
        $department_user     = $this->input->post('department');
        $username_user       = $this->input->post('username');
        $password_user       = md5($this->input->post('password'));
        $email_user          = $this->input->post('email');
        $dateregistered_user = $this->input->post('dateregistered');

        /*echo "<pre>";
        echo var_dump($firstname_user);
        echo var_dump($lastname_user);
        echo var_dump($middlename_user);
        echo var_dump($department_user);
        echo var_dump($username_user);
        echo var_dump($password_user);
        echo var_dump($email_user);
        echo var_dump($dateregistered_user);
        echo "<pre>";
        exit();*/
        
        $this->security->xss_clean($firstname_user);
        $this->security->xss_clean($lastname_user);
        $this->security->xss_clean($middlename_user);
        $this->security->xss_clean($username_user);
        $this->security->xss_clean($password_user);
        $this->security->xss_clean($email_user);
        $this->security->xss_clean($type_user);
        $this->security->xss_clean($department_user);
        
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('middlename', 'Middlename', 'trim|required');
        $this->form_validation->set_rules('type', 'type', 'trim|required');
        $this->form_validation->set_rules('department', 'department', 'trim|required');
        /*$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');*/
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        /*$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');*/
        
        if ($this->form_validation->run() == false) {
           // echo '<script language="javascript">';
          //  echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            //echo '</script>';
            $this->session->set_flashdata('error',"All fields are required");
            redirect('create', 'refresh');
        
        }if ($this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]')->run() == false) {
           // echo '<script language="javascript">';
          //  echo 'alert("Username Already Exists.")';
           // echo '</script>';
             $this->session->set_flashdata('error',"Username Already Exists");
            redirect('create', 'refresh');
        
        }
        if ($this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]')->run() == false) {
          //  echo '<script language="javascript">';
            //echo 'alert("Email Already Exists.")';
           // echo '</script>';
            $this->session->set_flashdata('error',"Email Already Exists");
            redirect('create', 'refresh');

        }else {
            $data = array(
                'id' => '',
                'firstname' => $firstname_user,
                'lastname' => $lastname_user,
                'middlename' => $middlename_user,
                'type' => $type_user,
                'department' => $department_user,
                'username' => $username_user,
                'password' => $password_user,
                'email' => $email_user,
                'dateregistered' => $dateregistered_user
            );
            $this->db->insert('user', $data);
        }
    }
    public function update($id, $firstname, $astname, $middlename, $type, $department, $username, $password, $email, $dateregistered)
    {
        $firstname_user      = $this->input->post('firstname');
        $lastname_user       = $this->input->post('lastname');
        $middlename_user     = $this->input->post('middlename');
        $type_user           = $this->input->post('type');
        $department_user     = $this->input->post('department');
        $username_user       = $this->input->post('username');
        $password_user       = md5($this->input->post('password'));
        $email_user          = $this->input->post('email');
        $dateregistered_user = $this->input->post('dateregistered');
        
        $this->security->xss_clean($firstname_user);
        $this->security->xss_clean($lastname_user);
        $this->security->xss_clean($middlename_user);
        $this->security->xss_clean($username_user);
        $this->security->xss_clean($password_user);
        $this->security->xss_clean($email_user);
        
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('middlename', 'Middlename', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');
          $this->form_validation->set_rules('type', 'type', 'trim|required');
        $this->form_validation->set_rules('department', 'department', 'trim|required');
        
        if ($this->form_validation->run() == false) {
          //  echo '<script language="javascript">';
            //echo 'alert("All fields Are Required To Be Inputted Correctly.")';
           // echo '</script>';
              $this->session->set_flashdata('error',"All fields are required");
            redirect('create', 'refresh');
        } else {
            $data = array(
                'id' => $id_user,
                'firstname' => $firstname_user,
                'lastname' => $lastname_user,
                'middlename' => $middlename_user,
                'type' => $type_user,
                'department' => $department_user,
                'username' => $username_user,
                'password' => $password_user,
                'email' => $email_user,
                'dateregistered' => $dateregistered_user
            );
            $this->db->where('id', $id_user);
            return $this->db->update('user', $data);
        }
    }
    public function deleteuser($id)
    {
        $this->load->database();
        $this->db->where('id', $iduser);
        $this->db->delete();
        return true;
    }
    
    public function getInfoById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->result_array();
    }
    
    
    public function supplier_add()
    {
        $this->load->library('form_validation');
        $supplier_name     = $this->input->post('supplier_name');
        $contact_no        = $this->input->post('contact_no');
        $region            = $this->input->post('region');
        $province          = $this->input->post('province');
        $city              = $this->input->post('city');
        $address           = $this->input->post('address');
        $status            = ($this->input->post('status'));
        
        $this->security->xss_clean($supplier_name);
        $this->security->xss_clean($contact_no);
        $this->security->xss_clean($region);
        $this->security->xss_clean($province);
        $this->security->xss_clean($city);
        $this->security->xss_clean($address);
        $this->security->xss_clean($status);
        
        /*$this->form_validation->set_rules('supplier_name', 'supplier_name', 'trim|required|is_unique[supplier.supplier_name]');*/
        $this->form_validation->set_rules('contact_no', 'contact_no', 'trim|required');
        $this->form_validation->set_rules('region', 'region', 'trim|required');
        $this->form_validation->set_rules('province', 'province', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        
        if ($this->form_validation->run() == false) {
           // echo '<script language="javascript">';
           // echo 'alert("All fields Are Required To Be Inputted Correctly.")';
          //  echo '</script>';
             $this->session->set_flashdata('error',"All fields are required");
            redirect('supplier_add', 'refresh');
            
        }
        if ($this->form_validation->set_rules('supplier_name', 'supplier_name', 'trim|required|is_unique[supplier.supplier_name]')->run() == false) {
            //echo '<script language="javascript">';
           // echo 'alert("Supplier Name Already Exists.")';
           // echo '</script>';
            $this->session->set_flashdata('errors',"Supplier Name Already Exists");
            redirect('supplier_add', 'refresh');

        }
        if ($this->form_validation->run() == TRUE) {
           // echo '<script type="text/javascript">';
           // echo 'alert("success.")';
          //  echo '</script>';
            $this->session->set_flashdata('success',"Successfully Added");
            $data = array(
                'id' => '',
                'supplier_name' => $supplier_name,
                'contact_no' => $contact_no,
                'region' => $region,
                'province' => $province,
                'city' => $city,
                'address' => $address,
                'status' => $status
            );
             $this->db->insert('supplier', $data);
        }

        else {
            redirect('Login', 'refresh');
        }
    }
    public function getInfoById_supplier($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('supplier');
        return $query->result_array();
    }
    public function getInfoById_purchase_order($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('purchase_order');
        return $query->result_array();
    }
    
   
}