<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("shipping_list")->insert([
            ["from"=>"Петрозаводск",
            'to'=>"Санкт-Петербург"],

            ["from"=>"Петрозаводск",
            'to'=>"Москва"],

            ["from"=>"Петрозаводск",
            'to'=>"Выборг"],

            ["from"=>"Петрозаводск",
            'to'=>"Сегежа"],

            ["from"=>"Петрозаводск",
            'to'=>"Мурманск"],

            ["from"=>"Петрозаводск",
            "to"=>"Сортавала"]

        ]);
    }
}
