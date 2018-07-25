<?php
/**
*
*/
class ModelMahasiswa extends CI_Model
{
	public function __construct() {
		parent::__construct();

		//load database library
		$this->load->database();
	}
	
    function GetMahasiswa(){

    	return $this->db->get('mahasiswa');
    }
    
	function InsertMahasiswa($Data)
	{
		# code...
		if($this->db->insert('mahasiswa',$Data)){
			return true;
		}else{
			return false;
		}
	}
    function GetMahasiswaWithFilter($Filter)
	{
		# code...
		$this->db->select('*');
		$this->db->from('mahasiswa');
		if(count($Filter) > 0){
			$this->db->like($Filter);
		}
	  return $this->db->get();
	}
	function GetById($Where)
	{
		# code...
		return $this->db->get_where('mahasiswa',$Where);
	}
	function UpdateMahasiswa($Data){
	    $Where=array(
				'nim'=>$Data->nim
		);

        $this->db->where($Where);
		if($this->db->update('mahasiswa',$Data)){
			return true;
		}else {
			return false;
		}
	}
	function Delete($Id)
	{
		$Where=array(
				'nim'=>$Id
		);
		$this->db->where($Where);
		if($this->db->delete('mahasiswa')){
			return true;
		}else
		{
			return false;
		}
	}

}

?>
