<?php
class student5_model extends CI_Model 
{
  /*View*/
    function display_records()
  {
    $query=$this->db->get("student5");
    return $query->result();
  }
  public function getstudent5()
{

  $ret=$this->db->select('*')
  ->get('student5');
  return $ret->result();
}
	public function create($formarray){
    //
    $this->db->set($formarray);
    $this->db->insert('student5',$formarray);
  


}



} 

?>


