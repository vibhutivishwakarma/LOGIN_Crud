<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
    $this->session->sess_destroy();

    $data['title'] = "Login Page";
    $data['content'] = $this->load->view('auth/pages/login', $data, true);
    return $this->load->view('auth/shared/layout_master', $data);
}

public function signup()
{
  $data['title'] = "SignUp Page";
  $data['content'] = $this->load->view('auth/pages/signup', $data, true);
  return $this->load->view('auth/shared/layout_master', $data);
}

public function validlogin(){

  $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
  $this->form_validation->set_rules('password', 'Password', 'trim|required');

  if ($this->form_validation->run() == FALSE) {

      $this->index();
      
  } else {

      $Email = $this->input->post('email');
      $Pass = $this->input->post('password');
      
      $this->load->model('User_model');
      $login = $this->User_model->loginModel($Email, $Pass);
      // var_dump($login); die();
      if($login){

          redirect('base');
      }
      else{
          
          $this->index();
      }

      
  } 
}
public function validsignup()
{

    $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('number', 'Phone', 'trim|required|regex_match[/^[6-9]{1}[0-9]{9}$/]');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    // $this->form_validation->set_rules('address', 'Address', 'trim|required');
    if ($this->form_validation->run() == FALSE) {

        $this->signup();
    } else {

        $data =  $this->security->xss_clean($this->input->post());

        $formData = array(
            'firstname' =>  $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            // 'password'=>$data['password'],
            'number' => $data['number'],
            // 'address' => $data['address'],
            'slug' => url_title('firstname', 'dash', true)
        );

        $this->load->model('User_model');
        $InsertData = $this->User_model->registerModel($formData);
        $this->index();
        // return redirect('list-users');


    }
}
}
