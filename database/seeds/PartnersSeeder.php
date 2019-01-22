<?php

use Illuminate\Database\Seeder;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('partners')->delete();
        \Storage::disk('public')->deleteDirectory('partners');

        factory(App\Partner::class, 5)->create();
    }
}
