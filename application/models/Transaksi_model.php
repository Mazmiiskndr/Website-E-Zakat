<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function get_jumlah_transaksi()
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
		$query = $this->db->get('transaksi',$limit,$start);
		return $query;
	}
	public function get_data2($limit,$start)
	{
		$query = $this->db->get('transaksi',$limit,$start);
		return $query;
	}
	public function count_transaksi()
	{
		$query = $this->db->get('transaksi')->num_rows();
		return $query;
	}


	public function insert_transaksi($data,$table)
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

	public function downloadPembayaran($id)
	{
		$query = $this->db->get_where('bayar_zakat',array('id_bayar_zakat' => $id));
		return $query->row_array();
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambil_id_transaksi($id)
	{
		$result = $this->db->where('id_transaksi',$id)->get('transaksi');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 

	public function pendapatan()
	{
		$sql = "SELECT sum(jumlah_transfer) as jumlah_transfer FROM bayar_zakat";
		$result = $this->db->query($sql);
		return $result->row()->jumlah_transfer;
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('type');
		$this->db->like('kode_type',$keyword);
		$this->db->or_like('nama_type',$keyword);
		return $this->db->get()->result();
	}

	// public function ambil_id_transaksi($id)
	// {
	// 	$this->db->select('transaksi.id_transaksi,nama_transaksi');
	// 	$this->db->from('transaksi');
	// 	$this->db->join('type', 'transaksi.id_transaksi = type.id_type');
	// 	$result =$this->db->where('transaksi.id_transaksi', $id);
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