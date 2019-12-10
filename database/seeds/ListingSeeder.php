<?php

use App\Listing;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing::create([
            'user_id' => 1,
            'listing_type_id' => 5, // pabell
            'advert_level_id' => 1,
            'title' => 'Hyfryd Iawn',
            'slug' => 'abc123-hyfryd-iawn-nefyn',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'long_description' => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\n\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.\n\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\n\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\nQuis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
            'location' => 'Nefyn',
            'address' => "Y Lon Bost\nNefyn\nGwynedd",
            'postcode' => 'LL55 1SA',
            'lat' => '',
            'lon' => '',
            'cost_per_night' => '10',
            'beds' => '4',
            'amenities' => ['Wifi', 'Cawod', 'Trydan'],
            'availability' => '',
            'distances' => '',
        ]);
        Listing::create([
            'user_id' => 1,
            'listing_type_id' => 3, // static
            'advert_level_id' => 2,
            'title' => 'Static City',
            'slug' => 'ghj678-static-city-pwllheli',
            'short_description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ',
            'long_description' => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\n\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.\n\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\n\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\nQuis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
            'location' => 'Pwllheli',
            'address' => "123 Lon Fawr\nPwllheli\nGwynedd",
            'postcode' => 'LL45 2FR',
            'lat' => '',
            'lon' => '',
            'cost_per_night' => 40,
            'beds' => 3,
            'amenities' => ['Wifi', 'Cawod', 'Bathrwm', 'Parcio', 'Trydan'],
            'availability' => '',
            'distances' => '',
        ]);
        Listing::create([
            'user_id' => 1,
            'listing_type_id' => 3,
            'advert_level_id' => 2,
            'title' => 'Teitle arall',
            'slug' => 'hjk456-teil-atall-abersoch',
            'short_description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'long_description' => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\n\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.\n\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\n\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\nQuis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
            'location' => 'Abersoch',
            'address' => "12 Hen Lon\nAbersoch\Gwynedd\nCymru",
            'postcode' => 'LL78 6FR',
            'lat' => '',
            'lon' => '',
            'cost_per_night' => 59,
            'beds' => 6,
            'amenities' => ['Bathrwm', 'Parcio', 'Wifi', 'Cawod', 'Trydan'],
            'availability' => '',
            'distances' => '',
        ]);
        Listing::create([
            'user_id' => 1,
            'listing_type_id' => 1,
            'advert_level_id' => 3,
            'title' => 'Ty Mawr iawn',
            'slug' => 'rty678-ty-mawr-iawn-llannor',
            'short_description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. ',
            'long_description' => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\n\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.\n\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\n\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?\nQuis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
            'location' => 'Llannor',
            'address' => "Ty Lawr\nLlannor\nGwynedd",
            'postcode' => 'LL78 5JN',
            'lat' => '',
            'lon' => '',
            'cost_per_night' => 95,
            'beds' => 6,
            'amenities' => ['Wifi', 'Cawod', 'Teledu', 'Bathrwm', 'Parcio', 'Cegin'],
            'availability' => '',
            'distances' => '',
        ]);
    }
}
