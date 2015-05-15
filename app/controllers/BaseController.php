<?php

class BaseController extends Controller {

	/**
     * Initializer.
     *
     * @return \BaseController
     */

    public function __construct()
    {
        // parent::__construct();
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
