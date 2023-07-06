<?php  

public function getstudent5()
{

   this->load->database();
   $result=-$this->db->query("select *from student5");
   if(result->num-rows()>0)
   {
      return $result->result();
   }

else{
   return false;
}
}
}