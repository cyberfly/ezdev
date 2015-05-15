<?php

class AdminPackagesController extends \BaseController {

	/**
	 * Display a listing of packages
	 *
	 * @return Response
	 */

	public function index()
	{
		$title = 'Package List';

		$data = array('title'=>$title);

		$packages = Package::paginate(5);

		return View::make('admin.packages.index', compact('packages','data'));
	}

	/**
	 * Show the form for creating a new package
	 *
	 * @return Response
	 */

	public function create()
	{
		$title = 'Create Package';

		$data = array('title'=>$title);

		return View::make('admin.packages.create', compact('data'));
	}

	/**
	 * Store a newly created package in storage.
	 *
	 * @return Response
	 */

	public function store()
	{
		$validator = Validator::make($data = Input::all(), Package::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Package::create($data);

		Session::flash('success', 'Package has been created');

		return Redirect::route('admin.packages.index');
	}

	/**
	 * Display the specified package.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function show($id)
	{
		$title = 'View Package';

		$data = array('title'=>$title);

		$package = Package::findOrFail($id);

		return View::make('admin.packages.show', compact('package','data'));
	}

	/**
	 * Show the form for editing the specified package.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function edit($id)
	{
		$title = 'Edit Package';

		$data = array('title'=>$title);

		$package = Package::find($id);

		return View::make('admin.packages.edit', compact('package','data'));
	}

	/**
	 * Update the specified package in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function update($id)
	{
		$package = Package::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Package::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$package->update($data);

		Session::flash('success', 'Package has been updated');

		return Redirect::route('admin.packages.index');
	}

	/**
	 * Remove the specified package from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id)
	{
		Package::destroy($id);

		return '1';
	}

}