<?php

class RegistrationController extends \BaseController {

	public function create()
    {
        return View::make('registration.create');
	}



	public function store()
	{
        User::create(
            Input::only('username', 'email', 'password')
        );
       return  Redirect::home();
	}

}
