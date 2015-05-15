<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PackagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Package::create([
				'title'=> $faker->sentence(),
				'description'=> $faker->realText(200)
			]);
		}
	}

}