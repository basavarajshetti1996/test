<?php  
  class student5 extends CI_Controller{
   public function index()
   {
      $this->load->model("student5_model");
      $data['records']=$this->student5_model->getstudent5();
      $this->load view("student5_view",$data);
   }
  }

public function view(){
   $this->load->model('student5_model');
   $data['result']=$this->student5_model->getstudent5();
      $this->load view("student5_view",$data);
}