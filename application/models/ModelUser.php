<?php
/**
*
*/
class ModelUser extends CI_Model
{
	public function __construct() {
		parent::__construct();

		//load database library
		$this->load->database();
	}
	
    function AutUser($Username,$Password)
    {
         # code...
         $PasswordHash = md5($Password);
         $this->db->select('*');
         $this->db->from('pengelola');
         $this->db->where('username', $Username);
         $this->db->where('password', $PasswordHash);
         return $this->db->get();
   }
 function InsertUser($Data)
    {
        # code...
        if($this->db->insert('pengelola',$Data)){
            return true;
        }else{
            return false;
        }
    }
   function GetUserWithFilter($Filter)
    {
        # code...
        $this->db->select('*');
        $this->db->from('pengelola');
        if(count($Filter) > 0){
            $this->db->like($Filter);
        }
      return $this->db->get();
    }
    function UpdateUser($Data){
      $this->db->select('password');
         $this->db->from('pengelola');
         $this->db->where('id_pengelola', $Data->id_pengelola);
      $password =  $this->db->get()->result()[0];
      if($password->password !== $Data->password){
        $Data->password = md5($Data->password);

       }
        $Where=array(
                'id_pengelola'=>$Data->id_pengelola
        );
        $this->db->where($Where);
        if($this->db->update('pengelola',$Data)){
            return true;
        }else {
            return false;
        }
    }
   function Delete($Id)
    {
        $Where=array(
                'id_pengelola'=>$Id
        );
        $this->db->where($Where);
        if($this->db->delete('pengelola')){
            return true;
        }else
        {
            return false;
        }
    }
    function GatById($Where)
    {
        # code...
        return $this->db->get_where('pengelola',$Where);
    }
   function getUserName($id_pengelola){
        $this->db->select('username');
        $this->db->from('pengelola');
        $this->db->where('id_pengelola', $id_pengelola);
		return $this->db->get();
   }

}

?>
