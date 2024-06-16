<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Persona;

class personasController extends Controller
{
	public function index()
	{
		//$personas = DB::table('persona')->get();
		$personas = Persona::latest()->paginate(2);
		return view('people', compact('personas'));
	}

	public function show($id){
		$persona = Persona::find($id);
		return view('showPerson', compact('persona'));
	}
}
