<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Menu_model', 'menu');
  }

  public function index()
  {
    $data['title'] = 'Menu Management';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer');
    } else {
      $this->menu->addmenu();

      $this->session->set_flashdata('message', '<div class="alert alert-success autoHide" role="alert">New menu added!</div>');
      redirect('menu');
    }
  }


  public function subMenu()
  {
    $data['title'] = 'Submenu Management';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->model('Menu_model', 'menu');

    $data['menu'] = $this->db->get('user_menu')->result_array();
    $data['sub_menu'] = $this->menu->getSubMenu();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'URL', 'required');
    $this->form_validation->set_rules('icon', 'Icon', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/submenu', $data);
      $this->load->view('templates/footer');
    } else {
      $this->menu->addsubmenu();

      $this->session->set_flashdata('message', '<div class="alert alert-success autoHide" role="alert">New Submenu added!</div>');
      redirect('menu/submenu');
    }
  }

  public function editMenu($id)
  {
    $data['title'] = 'Edit Menu';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/editmenu', $data);
      $this->load->view('templates/footer');
    } else {
      $this->menu->editMenu($id);

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Diubah!</div>');
      redirect('menu');
    }
  }

  public function editSubMenu($id)
  {
    $data['title'] = 'Edit Sub Menu';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['menu'] = $this->db->get('user_menu')->result_array();
    $data['sub_menu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu ID', 'required');
    $this->form_validation->set_rules('url', 'Url', 'required');
    $this->form_validation->set_rules('icon', 'Icon', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/editsubmenu', $data);
      $this->load->view('templates/footer');
    } else {
      $this->menu->editSubMenu($id);

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Diubah!</div>');
      redirect('menu/submenu');
    }
  }

  public function deleteMenu($id)
  {
    $this->menu->deleteMenu($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>');
    redirect('menu');
  }

  public function deleteSubMenu($id)
  {
    $this->menu->deleteSubMenu($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>');
    redirect('menu/submenu');
  }
}
