<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	public function getByUsername($username,$table){
		$this->db->where('username', $username);
		$query = $this->db->get($table)->row_array();
		return $query;
	}

	// get all data

	public function getAllRecords($table)
	{
		$query = $this->db->get($table);
		return $query->result();
	}


	public function getRecordById($id,$table){
		$this->db->where('id', $id);
		$query = $this->db->get($table);
		return $query->result();
	}


	// delete a record

	public function deleteRecord($id,$table)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
	}
}
