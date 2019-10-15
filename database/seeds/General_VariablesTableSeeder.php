<?php

use Illuminate\Database\Seeder;

class General_VariablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_variables')->insert([
        	'type' => 'gender',
        	'locale' => 'id',
        	'value_input' => 'L', 
        	'description' => 'Laki-laki',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'gender',
        	'locale' => 'id',
        	'value_input' => 'P', 
        	'description' => 'Perempuan',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'gender',
        	'locale' => 'en',
        	'value_input' => 'L', 
        	'description' => 'Men',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'gender',
        	'locale' => 'en',
        	'value_input' => 'P', 
        	'description' => 'Women',
        ]);


        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'en',
        	'value_input' => '0', 
        	'description' => 'No Reaction',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'en',
        	'value_input' => '1', 
        	'description' => 'Low Positive',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'en',
        	'value_input' => '2', 
        	'description' => 'Medium Positive',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'en',
        	'value_input' => '3', 
        	'description' => 'Strong Positive',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'id',
        	'value_input' => '0', 
        	'description' => 'Tidak Ada Reaksi',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'id',
        	'value_input' => '1', 
        	'description' => 'Positif Lemah',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'id',
        	'value_input' => '2', 
        	'description' => 'Positif Sedang',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'id',
        	'value_input' => '3', 
        	'description' => 'Positif Kuat',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'de',
        	'value_input' => '0', 
        	'description' => 'Keine Reaktion',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'de',
        	'value_input' => '1', 
        	'description' => 'Schwach Positiv',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'de',
        	'value_input' => '2', 
        	'description' => 'Positiv',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'de',
        	'value_input' => '3', 
        	'description' => 'Stark Positiv',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'gender',
        	'locale' => 'de',
        	'value_input' => 'L', 
        	'description' => 'Mann',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'gender',
        	'locale' => 'de',
        	'value_input' => 'P', 
        	'description' => 'Frauen',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'gender',
        	'locale' => 'ms',
        	'value_input' => 'L', 
        	'description' => 'Lelaki',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'gender',
        	'locale' => 'ms',
        	'value_input' => 'P', 
        	'description' => 'Wanita',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'ms',
        	'value_input' => '0', 
        	'description' => 'Tiada Reaksi',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'ms',
        	'value_input' => '1', 
        	'description' => 'Positif Lemah',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'ms',
        	'value_input' => '2', 
        	'description' => 'Positif Sederhana',
        ]);

        DB::table('general_variables')->insert([
        	'type' => 'reaction_fd',
        	'locale' => 'ms',
        	'value_input' => '3', 
        	'description' => 'Positif Kuat',
        ]);

    }
}
