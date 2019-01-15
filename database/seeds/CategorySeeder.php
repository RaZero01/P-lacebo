<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();
        \Storage::disk('public')->deleteDirectory('categories');

        factory(App\Category::class, 4)->create();
    }
}
