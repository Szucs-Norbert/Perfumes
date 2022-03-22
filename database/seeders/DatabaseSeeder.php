<?php

namespace Database\Seeders;
namespace Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        DB::table("parfumes")->insert(
            [
                "name"=>"Police",
                "type"=>"férfi",
                "price"=>"150000",
            ],

            [
                "name"=>"Boss",
                "type"=>"női",
                "price"=>"20000",
            ],

            [
                "name"=>"Gucci",
                "type"=>"férfi",
                "price"=>"350000",
            ],

            [
                "name"=>"Adidas",
                "type"=>"női",
                "price"=>"5000",
            ],

            [
                "name"=>"Avon",
                "type"=>"férfi",
                "price"=>"4000",
            ],
        );
    }
}
