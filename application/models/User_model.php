<?php
class User_model extends CI_Model {

    public function create() {
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'message' => $message );

        $result = $this->db->insert('colan', $data);
        return $result;
    }

    public function get_data() {
        $query = $this->db->get('colan');
        $results = $query->result_array();
        return $results;
    }

    public function call(){
        $email = $this->input->post('email');

        $info = array( 'email' => $email);

        $result = $this->db->insert('def', $info);
        return $result;
    }

    public function call_data() {
        $query = $this->db->call('def');
        $result = $query->result_array();
        return $result;
    }
}
?>