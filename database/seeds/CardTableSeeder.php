<?php

use Illuminate\Database\Seeder;
use App\Card;
class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::truncate();

        factory(Card::class,10)->create();
    }
}
