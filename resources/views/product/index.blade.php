{{-- {{dd($product)}} --}}
<x-layout pageTitle="{{$product['title']}}">
    <!-- Main content of the site -->
    <!-- Page Content -->
    <main id="singleProductPage">
        <section class="split">
            <div class="contentWrapper">
                <header>
                    <h2 class="categoryTitle orange">{{$product['title']}}</h2>
                </header>
                <p>Cena: {{number_format($product['price'], 2, '.', '')}} &euro;</p>
                <p>Tilpums: {{$product['volume']}} {{$product['volumeUnit']}}</p>
                <p>{{$product['description']}}</p>
            </div>
            <div class="imageWrapper">
                <x-img src="{{ asset('storage/images/'.$product['image']['url']) }}"
                    alt="{{$product['image']['alt']}}"
                    title="{{$product['image']['title']}}"/>
            </div>
        </section>
    </main>
</x-layout>