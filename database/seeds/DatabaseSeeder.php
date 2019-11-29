<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	factory(App\Specification::class)->create(['name' => 'Larga Distancia',
    												'description' => '1000m to 4000m - 100km to 200km - 10km to 42.2km']);
    	factory(App\Specification::class)->create(['name' => 'Media Distancia',
    												'description' => '1900m-90km-21km']);
    	factory(App\Specification::class)->create(['name' => 'Mixed Relay','description'=>'150m-3km-1km']);
    	factory(App\Specification::class)->create(['name' => 'Paratriatlon','description'=>'750m-20km-5km']);
    	factory(App\Specification::class)->create(['name' => 'Relay','description'=>'150m-3km-1km']);
    	factory(App\Specification::class)->create(['name' => 'Sprint','description'=>'750m-20km-5km']);
    	factory(App\Specification::class)->create(['name' => 'Standard','description'=>'1500m-40km-10km']);
    	factory(App\Specification::class)->create(['name' => 'Super Sprint',''=>'250m to 500m - 6.5km to 13km - 1.7km to 3.5km']);
    }
}



	
	
	
	
	
	