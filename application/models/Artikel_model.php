<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function get_jumlah_artikel()
	{
		$sql = "SELECT count(id_artikel) as id_artikel FROM artikel";
		$result = $this->db->query($sql);
		return $result->row()->id_artikel;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function get_data($limit,$start)
	{
		$query = $this->db->get('artikel',$limit,$start);
		return $query;
	}
	public function get_data2($limit,$start)
	{
		$query = $this->db->get('artikel',$limit,$start);
		return $query;
	}
	public function count_artikel()
	{
		$query = $this->db->get('artikel')->num_rows();
		return $query;
	}


	public function insert_artikel($data,$table)
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

	public function ambil_id_artikel($id)
	{
		$result = $this->db->where('id_artikel',$id)->get('artikel');
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

	// public function ambil_id_artikel($id)
	// {
	// 	$this->db->select('artikel.id_artikel,nama_artikel');
	// 	$this->db->from('artikel');
	// 	$this->db->join('type', 'artikel.id_artikel = type.id_type');
	// 	$result =$this->db->where('artikel.id_artikel', $id);
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