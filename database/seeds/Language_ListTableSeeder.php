<?php

use Illuminate\Database\Seeder;

class Language_ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language_list')->insert([
        	'code' => 'id',
        	'name' => 'Indonesia',
        ]);

        DB::table('language_list')->insert([
        	'code' => 'en',
        	'name' => 'English',
        ]);

        DB::table('language_list')->insert([
        	'code' => 'de',
        	'name' => 'Germany',
        ]);

        DB::table('language_list')->insert([
        	'code' => 'ms',
        	'name' => 'Malaysia',
        ]);
    }
}
