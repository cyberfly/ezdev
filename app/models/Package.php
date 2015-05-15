<?php

class Package extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'package_name' => 'required',
		'package_description' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['package_name','package_description'];

}