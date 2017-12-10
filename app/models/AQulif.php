<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AQulif extends Model {

	public $timestamps = TRUE;

	protected $table = 'author_qualif';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'author_id',
		'school_name',
		'specialization',
		'awards'
	];

	public static $rules = [
		'author_id' => 'required|max:255',
		'school_name' => 'required|max:50',
		'specialization' => 'required|max:255',
		'awards' => 'required|max:255'
	];
}
