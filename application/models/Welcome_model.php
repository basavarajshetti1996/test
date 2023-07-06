<?php
class Welcome_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

 

    public function insertCSV($data)
            {
                $this->db->insert('admin', $data);
                return TRUE;
            }



    public function view_data(){
        $query=$this->db->query("SELECT ad.*
                                 FROM admin ad 
                                 ORDER BY ad.id DESC
                                 limit 10");
        return $query->result_array();
    }


public function dashboard(){
        $data['result']=$this->Welcome_model->getAllUploadcsv();
        $this->load->view('dashboard',$data);

       }
      
   

   }

