<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    
	public function index(){
		$workshopsObj = [
			['title' => 'Danza', 'category' => 'dance'],
			['title' => 'Deporte', 'category' => 'sport'],
			['title' => 'Oratoria', 'category' => 'oratory'],
			['title' => 'Liderazgo', 'category' => 'leadership']
		];
		return view('workshops', compact('workshopsObj'));
	}
}

