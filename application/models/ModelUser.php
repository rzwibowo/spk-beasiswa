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

   function getUserName($Where){
        $this->db->select('username');
        $this->db->from('pengelola');
        $this->db->where('nip', $Where);
		return $this->db->get();
   }

}

?>
