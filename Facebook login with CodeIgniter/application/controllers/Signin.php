<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function index()
	{
		// Check if user is logged in
		if ($this->facebook->is_authenticated())
		{
			// User logged in, get user details
			$user = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,picture');
			if (!isset($user['error']))
			{
				$data['user'] = $user;

				$data = array(
					'fb_id'         => $data['user']['id'],
                    'first_name'    => $data['user']['first_name'],
                    'last_name'     => $data['user']['last_name'],
                    'email'         => $data['user']['email'],
                    'gender'        => $data['user']['gender'],
                    'picture'       => $data['user']['picture']['data']['url'],
                    'log_mode'      => 'facebook'
                );
			}

			$userID = $this->users_model->check_user_exists($data['fb_id']);
			 
            // Check user data insert or update status

            if($userID){
            	$this->session->set_flashdata('user_already', 'This user registered already');
                $this->load->view('data', $data);
            }else{              	            
                //load model
			    $this->users_model->register($data);
			    //Create session
	            $user_data = array(
	            	'user_id'   => $user_id,
	            	'first_name'  => $username,
	            	'logged_in' => true
	            );
                $this->session->set_userdata($user_data);
			    $this->session->set_flashdata('user_registered', 'You are now logged in');
			    $this->load->view('data', $data);
            }

			//load model
			//$this->users_model->register($data);

			//user display view
		    //$this->load->view('data', $data);
		    redirect('signin/users');

		}else{

			// display view
		    $this->load->view('signin');
		}
	}

	public function users()
	{
		//Check login
       if(!$this->session->userdata()){
          redirect('signin');
        }

		 $data['users'] = $this->users_model->get_users();
		 $this->load->view('data', $data);
	}
    
    public function logout()
    {
    	$this->facebook->destroy_session();
    	redirect('signin');
    }

	public function __construct()
	{
		parent::__construct();

		// Load library and url helper
		$this->load->library('facebook');
		$this->load->helper('url');
		// $this->load->model('users_model');
	}

}