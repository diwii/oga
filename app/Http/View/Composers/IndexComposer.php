<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class IndexComposer
{
    public $page = [];
    public $document = [];
    /**
     * I think section structure for this particular example should look like
     * title
     * content - should I split content? Atm list/array is used. How content should be stored and resolved?
     * target url
     * section image
     */
    public $sections = [];
    /**
     * Create a new index composer.
     */
    public function __construct()
    {
        $this->page['title'] = 'Sākums';
        $this->document['title'] = 'Augstvērtīgu produktu gatavošana';
        $this->document['image']['url'] = asset('/storage/images/home/homeMainImage.jpeg');
        $this->document['image']['title'] = 'Uzņēmuma produkcija.';
        $this->document['image']['alt'] = 'Uzņēmuma produkcija: pastilas, sīrupu pudelītes tautiskā noskaņojumā.';
        $this->sections();
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // $view->with('count', $this->users->count());
        $view->with('page', $this->page)
                ->with('document', $this->document)
                ->with('sections', $this->sections);
    }

    public function sections()
    {
        $this->sections = [
            [
                'title' => 'Ogu audzēšana',
                'targetUrl' => route('about'),
                'list' => [
                    'Smiltsērkšķu',
                    'Aveņu',
                    'Zemeņu',
                    'Upeņu'
                ],
                'image' => [
                    'url' => asset('storage/images/home/ogas.jpeg'),
                    'title' => 'Smiltsērkšķu ogas',
                    'alt' => 'Smiltsērkšķu ogas'
                ]
            ],
            [
                'title' => 'Receptes',
                'targetUrl' => route('recipes'),
                'list' => [
                    'Aveņu nots',
                    'Upeņu pastilu biezpiena sacepums',
                    'Smiltsērkšķu ķīselis ar putotu biezpienu',
                ],
                'image' => [
                    'url' => asset('storage/images/home/cocktail.jpeg'),
                    'title' => 'Aveņu nots',
                    'alt' => 'Aveņu nots - stiprs džina un aveņu kokteilis.'
                ]
            ],
        ];
    }
}