<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings_model extends CI_Model
{
	private $settings = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();

		$this->init();
	}

	private function init()
	{
		$query = $this->db->get('settings');
		if ( ! $query || $query->num_rows === 0) return ;
		foreach($query->result() as $v)
		{
			$this->settings[$v->key] = $v->value;
		}
	}

	public function get($key)
	{
		if (is_array($key))
		{
			$result = [];
			foreach($key as $v)
			{
				$result[$v] = $this->get_settings($v);
			}
			return $result;
		}

		if (! isset($this->settings[$key]))
		{
			return NULL;
		}

		return $this->settings[$key];
	}

}
