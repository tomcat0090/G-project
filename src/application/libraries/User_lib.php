<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_lib
{
	private $user;

	public function __construct()
	{
		$this->load->config('ion_auth', TRUE);
		$this->load->model('user_model');
	}

	public function __get($var)
	{
		return get_instance()->$var;
	}

	public function init($user_id)
	{
		$this->user = $this->user_model->get($user_id);
		if(empty($this->user)) $this->user = $this->user_model->create($user_id);
		return $this->user;
	}

	public function view($param)
	{
		if( ! isset($this->user->$param)) return 'Not found';
		return $this->user->$param;
	}

}
