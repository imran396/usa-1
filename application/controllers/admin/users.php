<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class users extends Crud_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout_admin');
        $this->load->model(array('users_model'));

    }

    public function index()
    {
        header("Content-type=> application/json");
        $this->data['active']=$this->uri->segment(2,0);
        $this->layout->view('admin/users/users_view', $this->data);

    }

    public function listing($start=0){

        $this->data['groupresult'] = $this->users_model->getGroup();
        $this->data['paging'] = $this->users_model->getListing($start);
        $this->data['active']=$this->uri->segment(2,0);
        $this->layout->view('admin/users/listing_view', $this->data);
    }

    public function save()
    {
        header("Content-type=> application/json");

        if (!empty($_POST)) {

            $this->addValidation();

            if ($this->form_validation->run()) {
                $username = strtolower($this->input->post('username'));
                $first_name = $this->input->post('first_name');
                $last_name= $this->input->post('last_name');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $phone = $this->input->post('phone');

                $additional_data = array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'status' => 1
                );

            }

            if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email,$phone,$additional_data))
            { //check to see if we are creating the user
                //redirect them back to the admin page
                $this->session->set_flashdata('success_msg',"New user has been added successfully");
                redirect('admin/users/listing', 'refresh');
            }else{

                $this->data['success_msg'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
                $this->layout->view('admin/users/users_view', $this->data);

            }
        }

        //$this->index();

    }
    function simpleRandString($length=16, $list="0123456789"){
        mt_srand((double)microtime()*1000000);
        $newstring="";
        if($length>0){
            while(strlen($newstring)<$length){
                $newstring.=$list[mt_rand(0, strlen($list)-1)];
            }
        }
        return $newstring;
    }

    public function profile($username)
    {

        $this->data['queryup'] = $this->users_model->getusers($username);
        $this->data['groupresult'] = $this->users_model->getGroup();
        $this->data['locresult'] = $this->users_model->getLocations();
        $this->data['active']=$this->uri->segment(2,0);
        if($this->session->userdata('username') == $username ){

            $this->layout->view('admin/users/profile_view', $this->data);

        }else{

            $this->layout->view('admin/users/edit_user_view', $this->data);
        }
    }


    private function addValidation()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');
        $this->form_validation->set_rules('first_name', 'First Name', 'xss_clean');
        $this->form_validation->set_rules('last_name', 'Last Name', 'xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
       // $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

    }
    function update_profile()
    {


        $this->passwordValidation();

        if ($this->form_validation->run() != false)
        {

            $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));
            $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));
            if ($change)
            { //if the password was successfully changed
                $this->session->set_flashdata('success_msg', $this->ion_auth->messages());
                //$this->auth_model->logout();
                redirect('auth/logout');
            }else{
                redirect('admin/users/profile/'.$this->session->userdata('username'));
            }

        }
        else
        {
            $this->data['active']=$this->uri->segment(2,0);
            $this->data['queryup'] = $this->users_model->getusers($this->session->userdata('username'));
            $this->layout->view('admin/users/profile_view', $this->data);
        }
    }

    private function passwordValidation(){

        $username=$this->input->post('username');
        $old=$this->input->post('old');
        $this->form_validation->set_rules('old', 'Old password', 'required|callback_checkPassword');
        $this->form_validation->set_rules('new', 'New Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
        $this->form_validation->set_rules('new_confirm', 'Confirm New Password', 'required');


    }


    function checkPassword($oldPassword){

        $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));
        $oldpassword = $this->ion_auth_model->hash_password_db($identity,$oldPassword);
        $count=$this->db->select('password')->where(array( strtolower('password') => strtolower($oldpassword) ))->get('users')->num_rows();
        if($count == 1 )
        {
            return TRUE;
        }else{
            $this->form_validation->set_message('checkPassword','Your old password is not exist');
            return FALSE;
        }

    }

    public function edit($username){

        header("Content-type=> application/json");
        $this->data['queryup'] = $this->users_model->getusers($username);
        $this->data['groupresult'] = $this->users_model->getGroup();
        $this->data['active']=$this->uri->segment(2,0);
        $this->layout->view('admin/users/edit_user_view', $this->data);

    }

    function update(){

        $username=$this->input->post('username');
        $this->form_validation->set_rules('first_name', 'First name', 'required');
        $this->form_validation->set_rules('last_name', 'Last name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'valid_email');

        if ($this->form_validation->run() == false)
        {
            if($this->session->userdata('username') == $username ){
                $this->profile($username);
            }else{
                $this->edit($username);
            }

        }else{

            $this->saveData();
            $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
            if($this->session->userdata('username') == $username ){
                redirect('admin/users/profile/'.$username);
            }else{
                redirect('admin/users/edit/'.$username);
            }

        }

    }

    public function checkPasscode($employee_id){

        $id = $this->input->post('id');
        return  $this->users_model->getCheckPasscode($id,$employee_id);
    }

    private function saveData()
    {
        $data = $this->input->post();
        if (!empty($data['username'])) {
            $this->users_model->update($data, $data['id']);
        }

    }

    public function status($username)
    {

        $this->users_model->statusChange($username);
        $this->session->set_flashdata('success_msg',$this->lang->line('update_msg'));
        $this->redirectToHome("listing");

    }


    public function remove($id)
    {
        $this->users_model->deactivate($id);
        $this->redirectToHome("listing");

    }

    public function checkUserName($title){

        $data = $this->input->post();
        return  $this->users_model->checkusers($data['id'],$title);

    }

    function search($urlsearch=NULL,$start=0){


        $getsearch = $this->input->get('search');

        if($getsearch){
            $search = $getsearch;
        }else{
            $search = $urlsearch;
        }

        if(!empty($search)){

            $this->data['paging'] = $this->users_model->searching($search,$start);
            $this->data['active']=$this->uri->segment(2,0);
            $this->layout->view('admin/users/listing_view', $this->data);


        }else{

            $this->session->set_flashdata('warnings_msg',$this->lang->line('update_msg'));
            $this->redirectToHome("listing");
        }


    }


    private function redirectToHome($redirect = NULL)
    {
        redirect('admin/users/'.$redirect);
    }





}