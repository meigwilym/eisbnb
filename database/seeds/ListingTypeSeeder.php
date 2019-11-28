<?php

use App\ListingType;
use Illuminate\Database\Seeder;

class ListingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListingType::create([
            'name' => 'Ty',
            'active' => true,
        ]);
        ListingType::create([
            'name' => 'Ystafell mewn Ty',
            'active' => true,
        ]);
        ListingType::create([
            'name' => 'Carafan Statig',
            'active' => true,
        ]);
        ListingType::create([
            'name' => 'Carafan Symudol neu Fan',
            'active' => true,
        ]);
        ListingType::create([
            'name' => 'Caban neu Cwt',
            'active' => true,
        ]);
        ListingType::create([
            'name' => 'Pabell',
            'active' => true,
        ]);
    }
}
