<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getRegister()
	{
		return View::make('home.register');
	}

	public function postRegister()
	{
		try
		{
			$user = Sentry::createUser(array(
					'first_name' => Input::get('first_name'),
					'last_name' => Input::get('last_name'),
					'email' => Input::get('email'),
					'password' => Input::get('password'),
					'activated' => true,
					));

			// Find the group using the group id

		    // $customerGroup = Sentry::findGroupById(4);
		    $customerGroup = Sentry::findGroupById(1);

		    // Assign the group to the user

		    if ($user->addGroup($customerGroup))
		    {
		        // Group assigned successfully

		    	// Redirect::to('dashboard');

		    	Session::flash('success', 'success');
		    	return Redirect::route('dashboard');
		    }
		    else
		    {
		        // Group was not assigned
		    }

		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    echo 'Login field is required.';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    echo 'Password field is required.';
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
		    echo 'User with this login already exists.';
		}
	}

	public function postLogin()
	{
		$credentials = array(
						'email' => Input::get('email'),
						'password' => Input::get('password'),
						);

		try{

			$user = Sentry::authenticate($credentials, false);

			if($user)
			{
				$admin = Sentry::findGroupById(1);

				if ($user->inGroup($admin))
			    {
			        // User is in Administrator group

			        return Redirect::to('admin.dashboard');
			    }
			    else
			    {
			    	return Redirect::to('dashboard');
			    }
			}
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    echo 'Login field is required.';
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'User not found.';
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
		    echo 'User not activated.';
		}

		// return Redirect::to('login')->withErrors(array('login' => $e->getMessages()));

	}

	public function logout()
	{
		Sentry::logout();
		return Redirect::to('/');
	}



}
