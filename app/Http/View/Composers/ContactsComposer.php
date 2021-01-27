<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class ContactsComposer
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
        $this->page['title'] = 'Kontakti';
        $this->document['title'] = 'Sazinies ar mums';
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
                // 'title' => 'Ogu audzēšana',
                // 'targetUrl' => '/',
                'content' => [
                    'Tālrunis: +371 26437844',
                    'E-pasts: viksieni@gmail.com',
                    'Adrese: Rendas pagasts "Viļņi", Kuldigas nov. LV3319'
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