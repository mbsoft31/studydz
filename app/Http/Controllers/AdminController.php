<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\Section as SectionResource;
use App\Section;

class AdminController extends Controller
{
    
	public function index(Request $request)
	{
		$sections = SectionResource::collection(Section::where('section_id', null)->get());
		return view('admin.index', compact('sections'));
	}

}
