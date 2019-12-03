<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'slug' => 'amdan',
            'title' => 'Beth yw EisBnB?',
            'markdown' => 'Default markdown',
            'html' => '<p>Default HTML</p>',
        ]);
        Page::create([
            'slug' => 'prisiau',
            'title' => 'Prisiau',
            'markdown' => 'Default markdown',
            'html' => '<p>Default HTML</p>',
        ]);
        Page::create([
            'slug' => 'polisi-preifatrwydd',
            'title' => 'Polisi Preifatrwydd',
            'markdown' => 'Default markdown',
            'html' => '<p>Default HTML</p>',
        ]);
        Page::create([
            'slug' => 'polisi-cwcis',
            'title' => 'Polisi Cwcis',
            'markdown' => 'Default markdown',
            'html' => '<p>Default HTML</p>',
        ]);
        Page::create([
            'slug' => 'termau-gwasanaeth',
            'title' => 'Termau\'r Gwasanaeth',
            'markdown' => 'Default markdown',
            'html' => '<p>Default HTML</p>',
        ]);
    }
}
