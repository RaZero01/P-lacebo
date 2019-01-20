<?php

use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('people')->delete();
        \Storage::disk('public')->deleteDirectory('avatars');

        factory(App\Person::class, 5)->create();
    }
}
