<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

	public function get_jumlah_contact()
	{
		$sql = "SELECT count(id_contact) as id_contact FROM contact";
		$result = $this->db->query($sql);
		return $result->row()->id_contact;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function get_data($limit,$start)
	{
		$query = $this->db->get('contact',$limit,$start);
		return $query;
	}
	public function get_data2($limit,$start)
	{
		$query = $this->db->get('contact',$limit,$start);
		return $query;
	}
	public function count_contact()
	{
		$query = $this->db->get('contact')->num_rows();
		return $query;
	}


	public function insert_contact($data,$table)
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

	public function ambil_id_contact($id)
	{
		$result = $this->db->where('id_contact',$id)->get('contact');
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

	// public function ambil_id_contact($id)
	// {
	// 	$this->db->select('contact.id_contact,nama_contact');
	// 	$this->db->from('contact');
	// 	$this->db->join('type', 'contact.id_contact = type.id_type');
	// 	$result =$this->db->where('contact.id_contact', $id);
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