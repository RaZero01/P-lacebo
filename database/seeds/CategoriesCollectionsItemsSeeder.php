<?php

use Illuminate\Database\Seeder;

class CategoriesCollectionsItemsSeeder extends Seeder
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

        \DB::table('collection_items')->delete();
        \DB::table('collection_item_images')->delete();

        factory(App\Category::class, 4)->create()
        ->each(function ($category) {
            $category->collections()->saveMany(factory(App\Collection::class, rand(1, 3))->make())
            ->each(function ($collection) {
                $collection->items()->saveMany(factory(App\CollectionItem::class, rand(2, 5))->make())
              ->each(function ($item) {
                  $item->images()->saveMany(factory(App\CollectionItemImage::class, rand(1, 3))->make());
              });
            });
        });
    }
}
