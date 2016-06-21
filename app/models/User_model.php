<?php



class User_model extends CI_Model
{
    public function login_user($username, $password)
    {
        $enc_password = hash('sha512', $password);//pojacati sigurnost sifre


        $this->db->where('username',$username);
        $this->db->where('password',$enc_password);

        //query
        $this->db->select('id, admin');
        $result = $this->db->get('users');


        if ($result->num_rows() > 0) {
            $user = $result->first_row();
            return $user;
        }

    }

    public function create_member()
    {
        $enc_password = hash('sha512',$this->input->post('password'));//pojacati sigurnost sifre

        $data = array(

            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            'email'      => $this->input->post('email'),
            'username'   => $this->input->post('username'),
            'password'   => $enc_password
        );

        $insert = $this->db->insert('users', $data);
        return $insert;
    }

    public function add_user()/*admin add user*/
    {
        $enc_password = hash('sha512',$this->input->post('password'));//pojacati sigurnost sifre

        $data = array(

            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            'email'      => $this->input->post('email'),
            'username'   => $this->input->post('username'),
            'password'   => $enc_password,
            'admin'       => $this->input->post('admin')
        );

        $insert = $this->db->insert('users', $data);
        return $insert;
    }

    public function find_user()
    {
        $this->db->select('first_name,last_name,username,admin');
        $result = $this->db->get('users');
        return $result->result();
    }

}

?>