<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Routing\Router;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Translation\Translator;
use Illuminate\Support\Collection;
use App\Category;

class MenuComposer
{
    /**
     * Menu items.
     *
     * @var array
     */
    protected static $items;

    /**
      * @var Collection
      */
    private $collection;

    /**
     * Create a menu composer.
     *
     * @return void
     */
    public function __construct(Collection $collection, Translator $translator, UrlGenerator $urlGenerator, Router $router)
    {
        $this->collection = $collection;

        static::$items = [
          [
              'title' => 'Главная',
              'url' => 'home'
          ],
          [
              'title' => 'Категории',
              'dropdown_items' => Category::all()
          ],
          [
              'title' => 'О компании',
              'url' => 'about'
          ],
          [
              'title' => 'Партнёры',
              'url' => 'partners.index'
          ],
          [
              'title' => 'События',
              'url' => 'events.index'
          ],
          [
              'title' => 'Контакты',
              'url' => 'contacts'
          ],
        ];
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        foreach (static::$items as $item) {
            $this->collection->push((object)[
              'title' => $item['title'],
              'url' => array_key_exists('url', $item) ? $item['url'] : null,
              'dropdown_items' => array_key_exists('dropdown_items', $item) ? $item['dropdown_items'] : null,
            ]);
        }

        $view->with('menu_items', $this->collection);
        $view->with('logo', "https://p-lacebo.com/img/Logo2.png");
    }
}
