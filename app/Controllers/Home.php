<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		log_message('info','hello');
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
