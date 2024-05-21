<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	// get all data

	public function getAllRecords($table)
	{
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
