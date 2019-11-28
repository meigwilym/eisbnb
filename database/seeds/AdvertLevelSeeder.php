<?php

use App\AdvertLevel;
use Illuminate\Database\Seeder;

class AdvertLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdvertLevel::create([
            'name' => 'Sylfaenol',
            'description' => '<div>Hysbyseb yn cynnwys yr holl fanylion pwysig. </div>',
            'cost' => 10,
            'active' => true,
        ]);
        AdvertLevel::create([
            'name' => 'Lluniau',
            'description' => '<div>Popeth mewn hysbyseb Sylfaenol ond hefyd gyda lluniau. </div>',
            'cost' => 20,
            'active' => true,
        ]);
        AdvertLevel::create([
            'name' => 'Arbennig',
            'description' => '<div>Y wybodaeth pwysig, lluniau ac yn ymddangos ar y dudalen flaen ac ar frig y rhestr.</div>',
            'cost' => 40,
            'active' => true,
        ]);
    }
}
