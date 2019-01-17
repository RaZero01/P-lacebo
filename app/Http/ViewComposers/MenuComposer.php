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
     * @var Translator
     */
    private $translator;

    /**
     * @var UrlGenerator
     */
    private $urlGenerator;

    /**
     * @var Router
     */
    private $router;

    /**
     * Create a menu composer.
     *
     * @return void
     */
    public function __construct(Collection $collection, Translator $translator, UrlGenerator $urlGenerator, Router $router)
    {
        $this->collection = $collection;
        $this->translator = $translator;
        $this->urlGenerator = $urlGenerator;
        $this->router = $router;

        static::$items = [
          [
              'title' => 'ГЛАВНАЯ',
              'route' => 'home'
          ],
          [
              'title' => 'КАТЕГОРИИ',
              'dropdown_items' => Category::all()
          ],
          [
              'title' => 'О КОМПАНИИ',
              'route' => 'empty'
          ],
          [
              'title' => 'ПАРТНЕРЫ',
              'route' => 'empty'
          ],
          [
              'title' => 'СОБЫТИЯ',
              'route' => 'empty'
          ],
          [
              'title' => 'КОНТАКТЫ',
              'route' => 'empty'
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
              'route' => array_key_exists('route', $item) ? $item['route'] : null,
              'dropdown_items' => array_key_exists('dropdown_items', $item) ? $item['dropdown_items'] : null,
            ]);
        }

        $view->with('menu_items', $this->collection);
        $view->with('logo', "https://p-lacebo.com/img/Logo2.png");
    }
}
