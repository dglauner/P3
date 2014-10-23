<?php

class myController extends BaseController {
	
	public function getFaketext()
	{
		return View::make('faketext');
	}
	
	public function postFaketext()
	{
		$numText = Input::get('num-text', '3');
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($numText);
		return View::make('faketext', array('text' => $paragraphs, 'num-text' => $numText));
	}

	public function getGenerateuser()
	{
		return View::make('generateuser');
	}
	
	public function postGenerateuser()
	{
		$phone = Input::get('phone', '0');
		$email = Input::get('email', '0');
		$numUsers = Input::get('num-users', '1');
		$fakers = Faker\Factory::create();
		return View::make('generateuser', array('fakers' => $fakers, 'num-users' => $numUsers, 'phone' => $phone, 'email' => $email));
	}

}
