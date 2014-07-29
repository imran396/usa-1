<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class tadootag extends Crud_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout_admin');
        $this->load->model(array('users_model'));
        $this->load->model(array('tadoo_model'));
        $this->load->model(array('tadootag_model'));
    }

     public function listing($start = 0 ){
        $this->data['paging'] = $this->tadootag_model->getListing($start);
        $this->data['active']=$this->uri->segment(2,0);
        $this->layout->view('admin/tadootags/listing_view', $this->data);
    }

    public function create(){

         if (!empty($_POST)) {
              $this->addValidation();

            if ($this->form_validation->run()) {
                $data = $this->input->post();
                $this->tadootag_model->save($data);
             }
         }

        $this->data["tadoolist"] = $this->tadootag_model->fillCombo();
        $this->layout->view('admin/tadootags/new',$this->data);
    }

    public function edit($id){
        $this->data['active']=$this->uri->segment(2,0);
        $this->data['queryup'] = $this->tadootag_model->findById($id);
        $this->layout->view('admin/tadootag/tadoo_view', $this->data);
    }

    private function addValidation()
    {
        $this->form_validation->set_rules('tag', 'Tag', 'required');
    }
}




