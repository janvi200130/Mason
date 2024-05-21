<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Model
{

	// get all contact data

	public function getAllRecords()
	{
		$query = $this->db->get('contacts');
		return $query->result();
	}


	// delete contact record

	public function deleteRecord($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('contacts');
	}
}
