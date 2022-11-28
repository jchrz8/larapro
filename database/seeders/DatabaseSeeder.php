<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Shop;
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
        //\App\Models\User::factory(10)->create();

        Shop::create([
            'title' => 'produkt1',
            'desc' => 'opis',
            'value' => 15
        ]);
        Shop::create([
            'title' => 'produkt2',
            'desc' => 'opis drugi dłuższy',
            'value' => 39.99
        ]);
        Shop::create([
            'title' => 'produkt3',
            'desc' => 'opis 3 dłuższy',
            'value' => 39.99
        ]);
        Shop::create([
            'title' => 'produkt4',
            'desc' => 'opis 4 dłuższy',
            'value' => 59.99
        ]);
        Shop::create([
            'title' => 'produkt5',
            'desc' => 'opis 5 dłuższy',
            'value' => 49.99
        ]);
        Shop::create([
            'title' => 'produkt6',
            'desc' => 'opis 6 dłuższy',
            'value' => 9.99
        ]);
        Shop::create([
            'title' => 'produkt7',
            'desc' => 'opis 7 dłuższy',
            'value' => 19.99
        ]);
    }
}
