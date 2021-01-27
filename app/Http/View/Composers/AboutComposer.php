<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class AboutComposer
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
        $this->page['title'] = 'Sīrupu darināšana, par mums.';
        $this->document['title'] = 'Uzņēmuma darbības virziens un sniedzamie pakalpojumi.';
        $this->document['image']['url'] = asset('/storage/images/about/aboutMainImage.jpeg');
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
                    'Uzņēmums SIA “Oga” nodarbojas ar mājražošanu – audzē smiltsērkšķus, avenes, upenes, zemenes u.c. ogas un augļus,
                    kurus pārstrādā un iegūst sīrupus, sulas, pastilas  u.c. izstrādājumus.
                    Uzņēmums piedāvā iespēju apciemot saimniecību un iepazīties ar ražošanas procesu,
                    kā arī apskatīt ogu un augļu dārzus. SIA “ Oga” piedāvā savu produktu degustācijas.',

                    'SIA “Oga” ir nepieciešama mājaslapa, lai popularizētu sevis gatavotos, veselīgos produktus,
                    lai klients varētu piedāvājumu un jaunākās aktualitātes apskatīt sev ērtā laikā un vietā.
                    Saistībā ar pavasarī izsludinātajiem ierobežojumiem valstī, uzņēmums nespēja pilnvērtīgi funkcionēt,
                    jo tika apturēta izbraukumu tirdzniecība. Mājaslapas esamība nodrošina tirdzniecību internetā,
                    kā arī jaunu klientu piesaisti. Tā nodrošina arī produkcijas atpazīstamību.',
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