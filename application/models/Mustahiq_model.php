<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mustahiq_model extends CI_Model {

	public function get_jumlah_mustahiq()
	{
		$sql = "SELECT count(id_mustahiq) as id_mustahiq FROM mustahiq";
		$result = $this->db->query($sql);
		return $result->row()->id_mustahiq;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function get_data($limit,$start)
	{
		$query = $this->db->get('mustahiq',$limit,$start);
		return $query;
	}
	public function get_data2($limit,$start)
	{
		$query = $this->db->get('mustahiq',$limit,$start);
		return $query;
	}
	public function count_mustahiq()
	{
		$query = $this->db->get('mustahiq')->num_rows();
		return $query;
	}


	public function insert_mustahiq($data,$table)
	{
		$this->db->insert($table,$data);
	} 

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function update_data2($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}



	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambil_id_mustahiq($id)
	{
		$result = $this->db->where('id_mustahiq',$id)->get('mustahiq');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('type');
		$this->db->like('kode_type',$keyword);
		$this->db->or_like('nama_type',$keyword);
		return $this->db->get()->result();
	}

	// public function ambil_id_mustahiq($id)
	// {
	// 	$this->db->select('mustahiq.id_mustahiq,nama_mustahiq');
	// 	$this->db->from('mustahiq');
	// 	$this->db->join('type', 'mustahiq.id_mustahiq = type.id_type');
	// 	$result =$this->db->where('mustahiq.id_mustahiq', $id);
	// 	if($result->num_rows() > 0){
	// 		return $result->result();
	// 	}else{
	// 		return false;
	// 	}
	// 	return $this->db->get()->result();
	// }




}
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */