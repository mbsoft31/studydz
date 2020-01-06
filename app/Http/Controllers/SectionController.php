<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\Section as SectionResource;
use App\Section;

class SectionController extends Controller
{
    
    public function index(Request $request)
    {
    	return SectionResource::collection(Section::where('section_id', null)->get());
    }

	public function store(Request $request)
	{
		$section = Section::create($request->all());

		return new SectionResource($section);
	}

	public function show(Request $request, Section $section)
	{
		return new SectionResource($section);
	}

	public function showUI(Request $request, Section $section)
	{
		return view('admin.section.show', compact('section'));
	}

	public function update(Request $request, Section $section)
	{
		$section->name = $request->name;
		$section->title = $request->title;
		$section->description = $request->description;
		$section->section_id = $request->section_id;
		$section->data = $request->data;

		$section->save();

		return new SectionResource($section);
	}

}
