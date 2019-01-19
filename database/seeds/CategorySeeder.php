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

        \DB::table('collections')->delete();
        \Storage::disk('public')->deleteDirectory('collections');

        factory(App\Category::class, 4)->create()->each(function ($c) {
            $c->collections()->saveMany(factory(App\Collection::class, rand(1, 3))->make());
        });
    }
}
