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

	public function lorem()
	{


		if(Request::ajax())
		{
			$data = Input::all();
			$generator = new Badcow\LoremIpsum\Generator();
			$paragraphs = $generator->getParagraphs($data['paragraphs']);

			return implode("\n\n", $paragraphs);
		}
	}
	public function users()
	{

		if(Request::ajax())
		{
			// use the factory to create a Faker\Generator instance
			$faker = Faker\Factory::create();

			$data = Input::all();
			$location = false;
			$birthdate = false;
			$profile = false;
			$users = $data['users'];
			$text = "";
			if (array_key_exists("location",$data)) {
				$location = true;
			}
			if (array_key_exists("profile",$data)) {
				$profile = true;
			}
			if (array_key_exists("birthdate",$data)) {
				$birthdate = true;
			}
			for ($x=0; $x<$users; $x++) {
				$text .= $faker->name."\n";
				if($location){
					$text .= $faker->address."\n";
				}
				if($profile){
					$text .= "Profile:\n".$faker->text."\n";
				}
				if($birthdate){
					$text .= $faker->dateTimeThisCentury->format('Y-m-d')."\n";
				}
				$text .= "\n";
			} 
			return $text;
		}
	}
}
