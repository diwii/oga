<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class DownloadProductsComposer
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
        $this->page['title'] = 'Lejupielādēt sortimentu.';
        $this->document['title'] = 'Lejupielādēt sortimentu.';
        $this->document['image']['url'] = asset('/storage/images/download-products/download-products-main.jpeg');
        $this->document['image']['title'] = 'Uzņēmuma produkcija.';
        $this->document['image']['alt'] = 'Uzņēmuma produkcija: sīrupi, pastilas, eļļa.';
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
                // 'title' => 'Ogu audzēšana',
                // 'targetUrl' => '/',
                'content' => [
                    [
                        'title' => '> Microsoft excel formātā',
                        'url' => asset('/storage/downloads/viksieni-produkcija-01-12-2021.xls'),
                        'description' => ''
                    ],

                    [
                        'title' => '> PDF formātā',
                        'url' => asset('/storage/downloads/viksieni-produkcija-01-12-2021.pdf'),
                        'description' => ''
                    ],
                ],
                // 'image' => [
                //     'url' => asset('storage/images/home/ogas.jpeg'),
                //     'title' => 'Smiltsērkšķu ogas',
                //     'alt' => 'Smiltsērkšķu ogas'
                // ]
            ],
        ];
    }
}