 <?php
  class student5 extends CI_Controller{
    public function register(){
      $this->load->view('registration12');
      $this->load->model('student5_model');
      $formarray=array();
      
      $formarray['firstName']= $this->input->post('firstName');
             $formarray['lastName']= $this->input->post('lastName');
             $formarray['age']= $this->input->post('age');
             $formarray['course']= $this->input->post('course');
             $formarray['contactNumber']= $this->input->post('contactNumber');
            
      $this->student5_model->create($formarray);

    } 
 
    public function view(){
   $this->load->model('student5_model');
   $data['result']=$this->student5_model->getstudent5();
      $this->load->view("view",$data);
}
  }
   ?>
