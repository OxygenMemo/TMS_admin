<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TMS_admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->login();
    }
    public function login(){
        $this->checklogin_yes();
        if($this->input->post('btn_login') == NULL){// ถ้าไม่ได้กดปุ่ม btn_login
            $this->load->view('login');
        }else{// ถ้ากดปุ่ม
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters("<div class='error'>","</div>");
            $this->form_validation->set_rules("username","username","required|max_length[20]");
            $this->form_validation->set_rules("password","password","required|max_length[20]");

            if($this->form_validation->run() == FALSE){
                $this->load->view('login');
            }else{
                $ch = curl_init();
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                curl_setopt($ch, CURLOPT_URL,"http://119.59.122.157/tms/loginAdmin");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,"username={$username}&password={$password}");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $server_output = curl_exec($ch);
                curl_close($ch);
                $data = json_decode($server_output);
                
                //echo $data->headers->Accept;
                //echo $data;
                
                if($data->status){                    
                    $this->session_login_create($data->data->username[0]->username);
                    redirect(base_url()."index.php/TMS_admin/home");
                }else{
                    $this->load->view('login');
                }

            }
        }
    }
    
    public function session_login_create ($username){
        $newdata = array(
            'username'  => $username,
            'login' => TRUE
        );
    
        $this->session->set_userdata($newdata);
    }
    public function home(){
        $this->checklogin_no();
        $this->load->view('home');
    }
    public function checklogin_yes(){
        if(isset($_SESSION['login'])){
            redirect(base_url()."index.php/TMS_admin/home");
        }
    }
    public function checklogin_no(){
        if(!isset($_SESSION['login'])){
            redirect(base_url()."index.php/TMS_admin/index");
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url()."index.php/TMS_admin/index");
    }
}
class obj{}
