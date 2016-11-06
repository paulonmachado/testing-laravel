<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$toTruncate = ['users', 'cards', 'notes'];

    	foreach($toTruncate as $table){
    		DB::table($table)->truncate();
 		}

        $this->call(UsersTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(NotesTableSeeder::class);
    }
}
