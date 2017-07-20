<?php

use Illuminate\Database\Seeder;
use App\Note;
use App\Card;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 
        // $this->call(NoteTableSeeder::class);
        // $this->call(CardTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
