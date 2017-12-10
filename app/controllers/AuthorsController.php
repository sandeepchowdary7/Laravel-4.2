<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Author;
use App\Http\Requests;
use update;

class AuthorsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$authors = author::all();
		$result = [];
		foreach ($authors as $author) {
			$result [] = $this->ResultFormat($author);
		}
		return $result;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$object = Input::all();
		$object = new Author;
		$object->id = Input::get('id');
		$object->first_name = Input::get('first_name');
		$object->last_name = Input::get('last_name');
		$object->contact_number = Input::get('contact_number');
		$object->age = Input::get('age');
		$object->country = Input::get('country');
		$result = $object->save();
		return $object;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$authors = Author::where('id',$id)->find($id);
		return $authors;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$input = Input::all();
		$author = Author::find($id);
		$author->update($input);
		$result = $author->save();
		return $author;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$arguments = Input::get($id);
		$authors = Author::where('id', $id);
		$res = $authors->delete();
		if(!$res){
			return [
				'status'=> TRUE,
				'message' => 'Deleted successfully',
			];
		}
	}

	protected function ResultFormat($author) {
		return [
			'Id' => $author->id,
			'First_name' => $author->first_name,
			'Last_name' => $author->last_name,
			'Contact_number' => $author->contact_number,
			'Age' => $author->age,
			'Country' => $author->country,
		];
	}
}
