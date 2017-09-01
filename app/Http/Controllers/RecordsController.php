<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsController extends Controller
{
   
	public function index()
	{

	}

	public function showAll()
	{
		return view('view');
	}

	public function showNew()
	{
		return view('new');
	}
	public function showEdit()
	{
		return view('Edit');
	}



}
