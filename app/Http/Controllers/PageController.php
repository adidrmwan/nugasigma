<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* 
*/
class PageController extends Controller
{
	public function home()
	{
		return view('index');
	}
	
	public function visimisi()
	{
		return view('visimisi');
	}

	public function structure()
	{
		return view('struktur');
	}
		public function machines()
	{
		return view('machines');
	}
	public function laboratory()
	{
		return view('laboratory');
	}
	public function conference()
	{
		return view('conference');
	}
}
