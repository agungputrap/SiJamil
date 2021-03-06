<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create(array(
				'username' => $faker->userName,
				'role' => 'Civitas',
				'password' => $faker->word
			));
		}

		User::create(array(
				'username' => $faker->userName,
				'role' => 'Humas',
				'password' => $faker->word
		));
	}

}