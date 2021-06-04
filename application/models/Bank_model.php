<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_model extends CI_Model {

	function get_site_data(){
		$query = $this->db->get('bank', 1); 
		return $query;
	}

	public function get_jumlah_bank()
	{
		$sql = "SELECT count(id_bank) as id_bank FROM bank";
		$result = $this->db->query($sql);
		return $result->row()->id_bank;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}


	public function insert_bank($data,$table)
	{
		$this->db->insert($table,$data);
	}
	

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function ambil_id_bank($id)
	{
		$result = $this->db->where('id_bank',$id)->get('bank');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}




}
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */