<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

	// get all data

	public function getAllRecords($table)
	{
		$query = $this->db->get($table);
		return $query->result();
	}



	// get record by id
	public function getRecordById($id, $table)
	{
		$this->db->where('id', $id);
		$query = $this->db->get($table);
		return $query->result();
	}
}
