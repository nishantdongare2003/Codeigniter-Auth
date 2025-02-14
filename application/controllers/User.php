<?php 

    class User extends CI_Controller{

        public function index(){
            $this->load->view('register');
        }

        public function register(){

            if($this->input->post()){

                $this->form_validation->set_rules('name','Name','trim|required');
                $this->form_validation->set_rules('email','Email','trim|required|valid_email');
                $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');

                if($this->form_validation->run()==false){
                    $this->load->view('register');
                    return;
                }

                $data = [
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'password'=> password_hash($this->input->post('password'),PASSWORD_BCRYPT),
                ];
    
                if($this->User_model->register($data)){
                    $insert_id = $this->db->insert_id();
                    $this->session->set_userdata('new_id',$insert_id);
                    redirect('user/dashboard');
                }else{
                    $this->session->set_flashdata('failed','Registration Was Failed !Please Try Again');
                    redirect('user/register');
                }

            }
            
        }

        public function login(){

            if($this->input->post()){
                $this->form_validation->set_rules('email','Email','trim|required');
                $this->form_validation->set_rules('password','Password','trim|required');

                if($this->form_validation->run()==false){
                    $this->load->view('login');
                    return;
                }

                $em = $this->input->post('email');
                $pw = $this->input->post('password');
                $user = $this->User_model->login($em,$pw);

                if($user){
                    $this->session->set_userdata('new_id',$user->id);
                    $this->session->sess_regenerate();
                    redirect('user/dashboard');
                }else{
                    $this->session->set_flashdata('error',"Invalid Username and Password !Please Try Again");
					redirect('User/login');
                }
            }

            $this->load->view('login');
        }

        public function dashboard(){

            if(!$this->session->userdata('new_id')){
                redirect('user/login');
            }
            $this->load->view('dashboard');
        }

        public function logout(){
            $this->session->unset_userdata('new_id');
            redirect('user/login');
        }

    }
    
?>
