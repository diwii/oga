<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class RecipesComposer
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
        $this->page['title'] = 'Receptes';
        $this->document['title'] = 'Ēdienu un dzērienu receptes';
        $this->document['image']['url'] = asset('/storage/images/recipes/recipesMainImage.jpeg');
        $this->document['image']['title'] = 'Ēdieni un dzērieni';
        $this->document['image']['alt'] = 'Ēdieni uz galda';
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
            [ // section (category) item
                'accentColor' => 'green', // class name
                'title' => 'Ēdieni',
                // 'targetUrl' => route('about'),
                'content' => [
                    [ // content item
                        'title' => 'Biezpiena sacepums ar upeņu pastilām',
                        'table' => [
                            'head' => [
                                'Daudzums',
                                'Sastāvdaļas'
                            ],
                            'body' => [
                                [
                                    '2 saujas',
                                    'Upeņu pastilas'
                                ],
                                [
                                    '1kg',
                                    'Biezpiens'
                                ],
                                [
                                    '5',
                                    'Olas'
                                ],
                                [
                                    '4 ēd.karot.',
                                    'Skābais krējums'
                                ],
                                [
                                    '7 ēd.karot.',
                                    'Manna'
                                ],
                                [
                                    '7 ēd.karot.',
                                    'Cukurs'
                                ],
                                [
                                    '',
                                    'Vaniļa'
                                ],
                                [
                                    '',
                                    'Citrona miziņa'
                                ],
                            ],
                        ],
                        'paragraphs' => [
                            'Lai sacepums būtu viendabīgāks, biezpienu izlaiž caur sietu.
                            Biezpienu pēc tam liek bļodā, pievieno olas, skābo krējumu, mannu,
                            cukuru, citrona miziņu un mazliet vaniļas garšai (pāksts sēkliņas, cukuru, ekstraktu vai pulveri).
                            Visu samaisa, lai masa būtu vienmērīga.',

                            'Pēc tam biezpiena masā viegli iemaisa upeņu pastilas.
                            Ja mīkla ir visai šķidras konsistences, upeņu pastilas pirms pievienošanas nedaudz apviļā miltos.
                            Tādā veidā pastilas nenogrims trauka pamatnē.'
                        ],
                        'image' => [
                            'url' => asset('storage/images/recipes/biezpienaSacepums.jpeg'),
                            'title' => 'Biezpiena sacepums',
                            'alt' => 'Biezpiena sacepums, dekorēts ar dzērvenēm, piparmētru lapiņām, pārkaisīts ar pūdercukuru.'
                        ]
                    ],
                    [ // content item
                        'title' => 'Smiltsērkšķu ķīselis ar putotu biezpienu',
                        'table' => [
                            'head' => [
                                'Daudzums',
                                'Sastāvdaļas'
                            ],
                            'body' => [
                                [
                                    '200g',
                                    'Smiltsērkšķu ogas'
                                ],
                                [
                                    '500ml',
                                    'Ūdens'
                                ],
                                [
                                    '250g',
                                    'Cukurs'
                                ],
                                [
                                    '50g',
                                    'Cietes'
                                ],
                                [
                                    '200g',
                                    'Biezpiens'
                                ],
                                [
                                    '7 ēd.karot.',
                                    'Cukurs'
                                ],
                                [
                                    '',
                                    'Vaniļa'
                                ],
                            ],
                        ],
                        'paragraphs' => [
                            'Katliņā uzvāra ūdeni, pievieno ogas un tās pavāra ~ 5 minūtes.
                            Ogas izkāš un izberž caur sietu. Šo ūdeni ar izberzto ogu biezeni turpina vārīt un pievieno cukuru.
                            Aukstā ūdenī izšķīdina kartupeļu cieti un pievieno ūdenim ar izberzto ogu biezeni.',

                            'Tiklīdz ķīselis uzmet burbuli, katliņu ņem nost no uguns.
                            Ķīseli pilda porciju trauciņos un liek dzesēties. Saldo krējumu saputo ar cukuru un vaniļas cukuru.
                            Putošanas beigās pievieno biezpienu. Kad smiltsērkšķu biezais ķīselis atdzisis,
                            uz tā spiež biezpiena saldo masu, dekorē pārkaisot ar šokolādi.'
                        ],
                        'image' => [
                            'url' => asset('storage/images/recipes/smiltserkskuKiselis.jpeg'),
                            'title' => 'Smiltsērkšķu dzēriens',
                            'alt' => 'Divas glāzes smiltsērkšķu dzēriena uz dēlīša izkaisītas smiltsērkšķu ogas.'
                        ]
                    ],
                ],
            ],
            [ // section (category) item
                'accentColor' => 'orange', // class name
                'title' => 'Dzērieni',
                // 'targetUrl' => route('about'),
                'content' => [
                    [ // content item
                        'title' => 'Aveņu nots',
                        'table' => [
                            'head' => [
                                'Daudzums',
                                'Sastāvdaļas'
                            ],
                            'body' => [
                                [
                                    '50ml',
                                    'Džins'
                                ],
                                [
                                    '30ml',
                                    'Aveņu sīrups'
                                ],
                                [
                                    '15ml',
                                    'Citrona sula'
                                ],
                                [
                                    '',
                                    'Ledus'
                                ],
                                [
                                    '',
                                    'Šeikers'
                                ],
                                [
                                    '',
                                    'Martini glāze'
                                ],
                            ],
                        ],
                        'paragraphs' => [
                            'Martini glāzē liek ledu un atstāj glāzi atdzesēties.
                            Šeikerī ar ledu lejam sastāvdaļas. Kārtīgi sakrata un izkāš atdzesētajā martini glāzē.',

                            'Longdrink variants: Ja izmantot lielāku glāzi var pievienot gāzētu ūdeni.
                            Padarīs dzērienu vieglāku.'
                        ],
                        'image' => [
                            'url' => asset('storage/images/home/cocktail.jpeg'),
                            'title' => 'Aveņu nots',
                            'alt' => 'Aveņu nots - stiprs džina un aveņu kokteilis.'
                        ]
                    ],
                ],
            ],
        ];
    }
}