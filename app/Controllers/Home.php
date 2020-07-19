<?php namespace App\Controllers;


use CodeIgniter\Model;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{

		$estructura = view('estructura/header').view('estructura/body');
		return $estructura;
	}

	//--------------------------------------------------------------------

}
