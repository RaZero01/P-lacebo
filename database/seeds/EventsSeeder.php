<?php

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('events')->delete();
        \Storage::disk('public')->deleteDirectory('events');

        factory(App\Event::class, 4)->create();
    }
}
