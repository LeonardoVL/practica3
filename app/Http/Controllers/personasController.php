<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personasController extends Controller
{
	public function index()
	{
		$personas = DB::table('persona')->get();
		return view('people', compact('personas'));
	}
}
