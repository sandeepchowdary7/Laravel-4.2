<?php namespace App\Http\Controllers;

use App\Book;
use Illuminate\Support\Facades\Input;

class BooksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() { 
		$books = Book::all();
		$result = [];
		foreach ($books as $book) {
			$result [] = $this->ResultFormat($book);
		}
		return $result;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function store() {
		$books = Input::all();
		$books = new $books;
		$books->title = Input::get('title');
		$books->author = Input::get('author');
		$books->price = Input::get('price');
		$books->isbn = Input::get('isbn');
		$books->price = Input::get('price');
		$books->year_of_publish = Input::get('year of publish');
		$result = $books->save();
		return $books;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function create() {
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id) {
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id) {
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id) {
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

	protected function ResultFormat($book) {
		return [
			'Id' => $book->id,
			'Title' => $book->title,
			'Author' => $book->author,
			'Price' => $book->price,
			'Isbn' => $book->isbn,
			'Language' => $book->Language,
			'Year of Publisher' => $book->year_of_publisher,
		];
	}

}
