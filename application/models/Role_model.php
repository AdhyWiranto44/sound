<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function addrole()
    {
        $this->db->insert('user_role', ['role' => $this->input->post('role')]);
    }

    public function deleterole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
    }

    public function editRole($id)
    {
        $this->db->set('role', $this->input->post('role'));
        $this->db->where('id', $id);
        $this->db->update('user_role');
    }
}
