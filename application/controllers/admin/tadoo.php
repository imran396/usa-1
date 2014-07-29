<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class tadoo extends Crud_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout_admin');
        $this->load->model(array('users_model'));
        $this->load->model(array('tadoo_model'));

    }

     public function listing($start = 0 ){

        $this->data['paging'] = $this->tadoo_model->getListing($start);
        $this->data['active']=$this->uri->segment(2,0);
        $this->layout->view('admin/tadoo/listing_view', $this->data);

    }

    public function create(){

         if (!empty($_POST)) {
              $this->addValidation();

             if ($this->form_validation->run()) {
                $data = $this->input->post();
                $curdateObj = new \DateTime();
                $data['created'] = $curdateObj->format('Y-m-d H:i:s');
                $data['modified'] = $curdateObj->format('Y-m-d H:i:s');
                $data['user_id'] = $this->session->userdata('user_id');
                $this->tadoo_model->save($data);
             }
         }

        $this->layout->view('admin/tadoo/new');
    }

    public function edit($id){

        $this->data['active']=$this->uri->segment(2,0);
        $this->data['queryup'] = $this->tadoo_model->findById($id);
        $this->layout->view('admin/tadoo/edit', $this->data);
    }


    public function update($id){

         if (!empty($_POST)) {
              $this->addValidation();

             if ($this->form_validation->run()) {
                $data = $this->input->post();
                $curdateObj = new \DateTime();
                $data['created'] = $curdateObj->format('Y-m-d H:i:s');
                $data['modified'] = $curdateObj->format('Y-m-d H:i:s');

                $this->tadoo_model->update($data,$id);
             }

         }

        $this->data['active']=$this->uri->segment(2,0);
        $this->data['queryup'] = $this->tadoo_model->findById($id);
        $this->layout->view('admin/tadoo/edit', $this->data);
    }


    private function addValidation()
    {		$this->form_validation->set_rules('description', 'Description', 'required');

    }




}




