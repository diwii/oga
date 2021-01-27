<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductsComposer
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
    public function __construct(ProductCategory $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
        $this->page['title'] = 'Darinājumi - Produkcija';
        // $this->document['title'] = '';
        // $this->document['image']['url'] = asset('/storage/images/about/aboutMainImage.jpeg');
        // $this->document['image']['title'] = 'Uzņēmuma produkcija.';
        // $this->document['image']['alt'] = 'Uzņēmuma produkcija: sīrupi, pastilas, eļļa.';
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
                // ->with('document', $this->document)
                ->with('sections', $this->sections);
    }

    public function sections()
    {
        $this->sections = $this->category->with('products.image')->get()->toArray();
    }
}