<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

  public function getSubMenu()
  {
    $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                      ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ORDER BY `user_sub_menu`.`menu_id` ASC
                ";

    return $this->db->query($query)->result_array();
  }

  public function addmenu()
  {
    $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
  }

  public function addsubmenu()
  {
    $data = [
      'menu_id' => $this->input->post('menu_id'),
      'title' => htmlspecialchars($this->input->post('title')),
      'url' => htmlspecialchars($this->input->post('url')),
      'icon' => htmlspecialchars($this->input->post('icon')),
      'is_active' => $this->input->post('is_active')
    ];

    $this->db->insert('user_sub_menu', $data);
  }

  public function editMenu($id)
  {
    $this->db->set('menu', $this->input->post('menu'));
    $this->db->where('id', $id);
    $this->db->update('user_menu');
  }

  public function editSubMenu($id)
  {
    $this->db->set('title', $this->input->post('title'));
    $this->db->set('menu_id', $this->input->post('menu_id'));
    $this->db->set('url', $this->input->post('url'));
    $this->db->set('icon', $this->input->post('icon'));
    $this->db->set('is_active', $this->input->post('is_active'));
    $this->db->where('id', $id);
    $this->db->update('user_sub_menu');
  }

  public function deletemenu($id)
  {
    $this->db->delete('user_menu', ['id' => $id]);
  }

  public function deletesubmenu($id)
  {
    $this->db->delete('user_sub_menu', ['id' => $id]);
  }
}
