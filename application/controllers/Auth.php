<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Transaction_model', 'transaction');
  }

  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data['title'] = "soUnd: Login Page";
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');
    } else {
      // validation success
      $this->_login();
    }
  }


  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    $count = $this->transaction->getCartTotalUser();

    // user is available
    if ($user) {

      // user activated
      if ($user['is_active'] == 1) {

        // user password correct
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">Login Success<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-family: arial;">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('home');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger autoHide" role="alert">Wrong password!</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger autoHide" role="alert">Email is not activated!</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger autoHide" role="alert">Email is not registered!</div>');
      redirect('auth');
    }
  }


  public function registration()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    $data['roles'] = $this->db->get('user_role')->result_array();

    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'This email has already registered!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'min_length' => 'Password too short!',
      'matches' => 'Password don\'t match!'
    ]);
    $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == false) {
      $data['title'] = "soUnd: Registration";
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/registration', $data);
      $this->load->view('templates/auth_footer');
    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.jpg',
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => htmlspecialchars($this->input->post('role')),
        'is_active' => 1,
        'date_created' => time()
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success autoHide" role="alert">Congratulation! Your account has been registered. Please login.</div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success autoHide" role="alert">You have been logged out.</div>');
    redirect('auth');
  }


  public function blocked()
  {
    $this->load->view('auth/blocked');
  }
}
