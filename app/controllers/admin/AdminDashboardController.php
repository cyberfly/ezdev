<?php

class AdminDashboardController extends AdminController {

	/**
	 * Admin dashboard
	 *
	 */

	public function index()
	{
		// Title

		// $title = Lang::get('admin/users/title.user_management');
		$title = 'User List';

		$data = array('title'=>$title);

		// Grab all the users
		// $users = $this->user;

		$customerGroup = Sentry::findGroupById(4);

		// $users = Sentry::findAllUsersInGroup($customerGroup);
		$users = Sentry::findAllUsers();

		// echo "string";
        return View::make('admin.users.index', compact('users','data'));
	}

	public function edit()
	{
		// Title

		// $title = Lang::get('admin/users/title.user_management');
		$title = 'Edit User';

		$data = array('title'=>$title);

		// echo "string";
        return View::make('admin.users.edit', compact('data'));
	}

}