<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayar_zakat_model extends CI_Model {

	public function get_jumlah_bayar_zakat()
	{
		$sql = "SELECT count(id_bayar_zakat) as id_bayar_zakat FROM bayar_zakat";
		$result = $this->db->query($sql);
		return $result->row()->id_bayar_zakat;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function get_data($limit,$start)
	{
		$query = $this->db->get('bayar_zakat',$limit,$start);
		return $query;
	}
	public function get_data2($limit,$start)
	{
		$query = $this->db->get('bayar_zakat',$limit,$start);
		return $query;
	}
	public function count_bayar_zakat()
	{
		$query = $this->db->get('bayar_zakat')->num_rows();
		return $query;
	}


	public function insert_bayar_zakat($data,$table)
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

	public function ambil_id_bayar_zakat($id)
	{
		$result = $this->db->where('id_bayar_zakat',$id)->get('bayar_zakat');
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

	// public function ambil_id_bayar_zakat($id)
	// {
	// 	$this->db->select('bayar_zakat.id_bayar_zakat,nama_bayar_zakat');
	// 	$this->db->from('bayar_zakat');
	// 	$this->db->join('type', 'bayar_zakat.id_bayar_zakat = type.id_type');
	// 	$result =$this->db->where('bayar_zakat.id_bayar_zakat', $id);
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