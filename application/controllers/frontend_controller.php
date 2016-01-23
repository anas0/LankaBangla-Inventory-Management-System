<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class frontend_controller extends CI_Controller {

	function __construct(){
		parent :: __construct();
	}


	public function index()
	{
		$data['main_content'] = 'frontend/Supervisor';
		$this -> load -> view('includes/templates',$data);
	}

	public function Supervisor()
	{
		$data['main_content'] = 'frontend/Supervisor';
		$this -> load -> view('includes/templates',$data);
	}

    public function Admin()
	{
		$data['main_content'] = 'frontend/Admin';
		$this -> load -> view('includes/templates',$data);
	}

    public function Divition()
	{
		$data['main_content'] = 'frontend/Divition';
		$this -> load -> view('includes/templates',$data);
	}

    public function Gis()
	{
		$data['main_content'] = 'frontend/Gis';
		$this -> load -> view('includes/templates',$data);
	}

    public function StoreKeeper()
	{
		$data['main_content'] = 'frontend/StoreKeeper';
		$this -> load -> view('includes/templates',$data);
	}
  
}