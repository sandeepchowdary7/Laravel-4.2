<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	public $timestamps = TRUE;

	protected $table = 'books';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'isbn',
		'author',
		'language',
		'price',
		'year_of_publisher',
	];

	public static $rules = [
		'title' => 'required|max:255',
		'isbn' => 'required|max:50',
		'author' => 'required|max:255',
		'language' => 'required|max:255',
		'price' => 'required|max:255',
		'year_of_publisher' => 'required',
	];
}
