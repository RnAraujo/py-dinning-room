<?php

use Illuminate\Database\Seeder;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(['description' => 'Ingenieria de Sistemas', 'enabled' => true]);
        DB::table('books')->insert(['description' => 'Odontologia', 'enabled' => true]);
        DB::table('books')->insert(['description' => 'Ingenieria Informatica', 'enabled' => true]);
        DB::table('books')->insert(['description' => 'Ingenieria Económica', 'enabled' => true]);

    }
}
