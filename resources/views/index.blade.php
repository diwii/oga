<x-layout pageTitle="{{$page['title']}}">
    <!-- Main content of the site -->
    <!-- Page Content -->
    <main id="homePage">
        <figure id="mainImage">
            <div id="mainImageOverlay">
                <h1>{{$document['title']}}</h1>
                <div id="buttonContainer">
                    <a href="tel:+37126437844" id="zvanit" class="button">
                        <p>Zvanīt</p>
                        <p>+371 26437844</p>
                    </a>
                    <a href="{{route('download-products')}}" id="produkcija" class="button">Lejupielādēt sortimentu</a>
                    {{-- <a href="{{route('products')}}" id="produkcija" class="button">Produkcija</a> --}}
                </div>
            </div>
            <x-img src="{{$document['image']['url']}}"
                    alt="{{$document['image']['alt']}}"
                    title="{{$document['image']['title']}}"/>
        </figure>
        @foreach($sections as $section)
            <section class="split">
                <a href={{$section['targetUrl']}} class="contentWrapper">
                    <div>
                        <h2>{{$section['title']}}</h2>
                        <ul>
                            @foreach($section['list'] as $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- Should put this in css or somewhere else --}}
                    {{-- <div class="imageWrapper">
                        <img src="{{ asset('/storage') }}/images/icons/triangle-green.svg" alt="" title="">
                    </div> --}}
                </a>
                <a href={{$section['targetUrl']}} class="imageWrapper">
                    <x-img src="{{$section['image']['url']}}"
                            title="{{$section['image']['title']}}"
                            alt="{{$section['image']['alt']}}" />
                </a>
            </section>
        @endforeach
    </main>
</x-layout>