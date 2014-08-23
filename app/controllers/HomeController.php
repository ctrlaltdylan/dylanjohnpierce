<?php

	/**
	 * HomeController
	 * 
	 * @author Dylan Pierce <me@dylanjohnpierce.com>
	*/

class HomeController extends BaseController {

	public function index()
	{
		return View::make('Home.index');
	}

	public function handleContact()
	{
		return View::make('Home.index')
				->with('message', "Thanks! I'll message you when I can!");
	}

}
