<x-layout pageTitle="{{$page['title']}}">
    <!-- Main content of the site -->
    <!-- Page Content -->
    <main id="productPage">
        {{-- Each section is category --}}
        @foreach($sections as $category)
            <section>
                {{-- Category title --}}
                <header>
                    <h1 class="categoryTitle {{$category['accentColor']}}">{{$category['title']}}</h1>
                </header>
                <div class="productList">
                    {{-- Each category item is product --}}
                    @foreach($category['products'] as $product)
                    <div class="productWrapper">
                        <div class="imageWrapper">
                            <div class="buttonContainer">
                                <button class="button button-info">i</button>
                                <button class="button button-add">+</button>
                            </div>
                            <img src="{{ asset('storage/images/'.$product['image']['url']) }}"
                                    alt="{{ $product['image']['alt'] }}"
                                    title="{{ $product['image']['title'] }}"/>
                        </div>
                        <h2>{{$product['title']}}</h2>
                        <p>{{number_format($product['price'], 2, '.', '')}} &euro;</p>
                    </div>
                    @endforeach
                </div>
            </section>
        @endforeach
    </main>
</x-layout>