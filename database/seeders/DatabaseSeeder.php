<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->count(50)->create();
        \App\Models\Level::factory()->create(['nombre'=>'Oro']);
        \App\Models\Level::factory()->create(['nombre'=>'Plata']);
        \App\Models\Level::factory()->create(['nombre'=>'Bronce']);  

        \App\Models\Perfil::factory()->create(['nombre'=>'Perfil1']);  
        \App\Models\Perfil::factory()->create(['nombre'=>'Perfil2']);  
        \App\Models\Perfil::factory()->create(['nombre'=>'Perfil3']);  
        
        \App\Models\Location::factory()->create(['country'=>'Ecuador']);  
        \App\Models\Location::factory()->create(['country'=>'Colombia']); 
        \App\Models\Location::factory()->create(['country'=>'Chile']); 
     
        /*
        \App\Models\User::factory()->count(5)->create()->each(function($user){

            $perfil= $user->perfil()->save(\App\Models\Perfil::factory()->create()->make());

           $perfil->location()->save(factory\App\Models\Location::factory()->create()->make());

           $user->group()->attach($this->array(rand(1,3)));


   });*/
    }

}