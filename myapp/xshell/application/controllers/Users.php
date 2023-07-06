<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users extends CI_Controller {
 
  function __construct(){
    parent::__construct();
    $this->load->helper('url','file');
    $this->load->model('Users_model');
  }
 
  public function index(){
    
    $this->load->view('addform');
  }
  public function dashboard(){
    $data['result']=$this->Users_model->getAllUsers();
    
    $this->load->view('dashboard',$data);


    
  }


 
  public function addnew(){
    $this->load->view('addform.php');
  }
 
  public function insert(){
    $formArray['sku'] = $this->input->post('sku');
    $formArray['product_name'] = $this->input->post('product_name');
    $formArray['product_desc'] = $this->input->post('product_desc');
    $formArray['qty'] = $this->input->post('qty');
    $formArray['price'] = $this->input->post('price');
    $formArray['discount'] = $this->input->post('discount');
    $formArray['total'] = $this->input->post('total');
    
    
  
    $query = $this->Users_model->insertuser($formArray);
 
    $this->load->model('Users_model'); 
                $data['result']=$this->Users_model->getAllUsers();
            $this->load->view('dashboard',$data);
       
 
  }
 
  

  public function view(){
      $this->load->model('Users_model');
      $data['result']=$this->Users_model->getAllUsers();
      $this->load->view("user_list",$data);
       
     }
    

  

 
  

  public function register(){
      $this->load->view('addform');
      $this->load->model('Users_model');
    $formArray=array();
    $formArray['sku'] = $this->input->post('sku');
    $formArray['product_name'] = $this->input->post('product_name');
    $formArray['product_desc'] = $this->input->post('product_desc');
    $formArray['qty'] = $this->input->post('qty');
    $formArray['price'] = $this->input->post('price');
    $formArray['discount'] = $this->input->post('discount');
    $formArray['total'] = $this->input->post('total');
    
     $this->Users_model->create($formArray);  
  }

   public function user_list(){
      $this->load->model('Users_model');
      $data['result']=$this->Users_model->getUser();
      $this->load->view("user_list",$data);
      }
    
   
   
   public function uploadimage(){
     // here the user_model is loaded
      $this->load->model('Users_model');
      if(!empty($_FILES['picture']['name'])){
      //set the path for the image storage
        $config['upload_path'] = 'uploads/images/'; 
        /*$config['file_path']= '/path/to/your/upload/';
        $config['full_path']= '/path/to/your/upload/jpg.jpg';  */
        // type of files allowed
        $config['allowed_types'] = 'jpg|jpeg|png|gif|img|docx';
        $config['file_name'] = $_FILES['picture']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('picture')){
        // file uploading is done by this
          $uploadData = $this->upload->data();
          // the filename name is stored in a variable
          $picture = $config['file_name'];
        }else{
          $picture = $config['file_name'];
        }
      }else{
        $picture = $config['file_name'];
      }
      //storing the data into the array
    $formArray = array();
    $formArray['sku'] = $this->input->post('sku');
    $formArray['product_name'] = $this->input->post('product_name');
    $formArray['product_desc'] = $this->input->post('product_desc');
    $formArray['qty'] = $this->input->post('qty');
    $formArray['price'] = $this->input->post('price');
    $formArray['discount'] = $this->input->post('discount');
    $formArray['total'] = $this->input->post('total');
    $formArray['file'] = $picture;
      // calling the create function in user_model
      $check=$this->Users_model->uploadimg($formArray);
      if($check==true){
        $this->load->model('Users_model'); 
                $data['result']=$this->Users_model->getAllUsers();
            $this->load->view('dashboard',$data);
        echo '<script>alert("image done")</script>';
      }else{
        
        echo "error !";
      }
    // once the adding of data is completed the main in views/ is loaded
  }
  
}


?>



     




  
  



 

  

  

    
     

   
  