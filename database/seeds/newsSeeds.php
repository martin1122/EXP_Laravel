<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class newsSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,1000) as $index) {
	        DB::table('main_news')->insert([
	            'title'        => $faker->text($maxNbChars = 50),
                'catID'        => $faker->numberBetween($min = 1, $max = 5),
	            'hasCover'     => $faker->numberBetween($min = 0, $max = 1),
                'hasHead'      => $faker->numberBetween($min = 0, $max = 1) ,
                'content'      => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
	            'created_at'   => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'   => $faker->date($format = 'Y-m-d', $max = 'now'),
	        ]);
        }
        // $this->call(UsersTableSeeder::class);
    }
}
