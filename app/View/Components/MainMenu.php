<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class MainMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.main-menu');
    }

    public function menuItems()
    {
        $items =  [
            [
                'name' => 'Sīrupu darināšana',
                'routeName' => 'about',
            ],
            [
                'name' => 'Darinājumi',
                'routeName' => 'products',
            ],
            [
                'name' => 'Receptes',
                'routeName' => 'recipes',
            ],
            [
                'name' => 'Kontakti',
                'routeName' => 'contacts',
            ],
        ];

        /**
         * Loop through menu items,
         * check if it is active link set activeLink class.
         * 
         * Parse route name to url.
         */
        $items = array_map(function($item)
        {
            if ($item['routeName'] === Route::current()->getName()) {
                // set activeLink class
                $item['class'] = 'activeLink';
            } else {
                $item['class'] = '';
            }
            // Set url path from route name.
            $item['link'] = route($item['routeName']);

            return $item;
        }, $items);

        return $items;
    }
}
