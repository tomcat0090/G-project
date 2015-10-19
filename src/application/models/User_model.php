<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($user_id)
	{
		$query = $this->db->where('id', $user_id)->get('user');

		if( ! $query || $query->num_rows === 0) return NULL;

		return $query->row();
	}

	public function create($user_id)
	{
		$data = ['id' => $user_id];

		if($this->db->insert('user', $data))
		{
			return $this->get($user_id);
		}
		else
		{
			log_message('error', 'ユーザ作成失敗 SQL:' . $this->db->last_query());
			return [];
		}
	}

}
