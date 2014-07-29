<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class tadooassign extends Crud_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout_admin');
        $this->load->model(array('users_model'));
        $this->load->model(array('tadoo_model'));
        $this->load->model(array('tadooassign_model'));

    }

     public function listing($start = 0 ){

        $this->data['paging'] = $this->tadooassign_model->getListing($start);
        $this->data['active']=$this->uri->segment(2,0);
        $this->layout->view('admin/tadooassign/listing_view', $this->data);

    }

    public function create(){

         if (!empty($_POST)) {
              $this->addValidation();

            if ($this->form_validation->run()) {
                $data = $this->input->post();
                $curdateObj = new \DateTime();
                $data['created'] = $curdateObj->format('Y-m-d H:i:s');
                $data['modified'] = $curdateObj->format('Y-m-d H:i:s');
                $this->tadooassign_model->save($data);
             }

         }
        $this->data["userlist"] = $this->users_model->fillCombo();
        $this->data["tadoolist"] = $this->tadoo_model->fillCombo();
        $this->layout->view('admin/tadooassign/new',$this->data);
    }

    public function edit($id){

        $this->data['active']=$this->uri->segment(2,0);
        $this->data['queryup'] = $this->tadoo_model->findById($id);
        $this->layout->view('admin/tadoo/tadoo_view', $this->data);
    }

    private function addValidation()
    {		$this->form_validation->set_rules('description', 'Description', 'required');

    }




}




