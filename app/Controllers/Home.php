<?php

namespace App\Controllers;

use App\Models\TareaModel;

class Home extends BaseController{
	
	protected $input;
	protected $model;
	protected $db;
	
	public function __construct(){	
		$this->input = \Config\Services::request();
		$this->db = \Config\Database::connect();
		#$this->model = new MyModel();
	}

	public function index(){
		$data = ['title'=>'Store Management'];
		return view('head',$data).view('index').view('footer');
	}
}
