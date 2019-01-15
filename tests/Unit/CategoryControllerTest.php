<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class CategoryControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStore()
    {
        \Event::fake();

        $request = Request::create('/categories', 'POST', [
          'name'      =>     'Test',
          'image'     =>     UploadedFile::fake()->image('test_image.jpg')
        ]);

        $controller = new CategoryController();
        $response = $controller->store($request);

        $this->assertEquals(302, $response->getStatusCode());
        \Storage::disk('public')->assertExists('categories/test_image.jpg');
    }
}
