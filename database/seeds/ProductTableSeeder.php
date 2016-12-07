<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\PRODUCT;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('PRODUCT')->delete();

      PRODUCT::create([
        'product_id' => 1,
        'name' => '寝てるぬこ',
        'pass' => '001.jpg',
        'price' =>  '1200円'
       ]);

      PRODUCT::create([
        'product_id' => 2,
        'name' => 'うるうるぬこ',
        'pass' => 'nukooo.jpg',
        'price' =>  '1300円'
      ]);

      PRODUCT::create([
        'product_id' => 3,
        'name' => 'ぬこ',
        'pass' => 'suko_11.jpg',
        'price' =>  '1400円'
      ]);

      PRODUCT::create([
         'product_id' => 4,
         'name' => 'ふりかえり美人ぬこ',
         'pass' => 'bengaru.jpg',
         'price' =>  '1500円'
      ]);

      PRODUCT::create([
        'product_id' => 5,
        'name' => 'ぐでーんぬこ',
        'pass' => '01.jpg',
        'price' =>  '1600円'
      ]);

      PRODUCT::create([
        'product_id' => 6,
        'name' => 'ぬこ',
        'pass' => '02.jpg',
        'price' =>  '1700円'
      ]);

      PRODUCT::create([
        'product_id' => 7,
        'name' => 'ぬこ',
        'pass' => '06.jpg',
        'price' =>  '1800円'
      ]);

     PRODUCT::create([
       'product_id' => 8,
       'name' => 'ぬこ',
       'pass' => '07.jpg',
       'price' =>  '1900円'
     ]);
    }
}
