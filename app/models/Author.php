<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

	public $timestamps = TRUE;

	protected $table = 'authors';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name',
		'last_name',
		'contact_number',
		'age',
		'country'
	];

	public static $rules = [
		'first_name' => 'required|max:255',
		'last_name' => 'required|max:50',
		'contact_number' => 'required|max:255',
		'age' => 'required|max:255',
		'country' => 'required|max:255'
	];
}
