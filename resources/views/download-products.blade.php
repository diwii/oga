<x-layout pageTitle="{{$page['title']}}">
    <!-- Main content of the site -->
    <!-- Page Content -->
    <main id="singlePage">
        <figure id="mainImage">
            <div id="mainImageOverlay">
                <h1>{{$document['title']}}</h1>
            </div>
            <x-img src="{{$document['image']['url']}}"
                    alt="{{$document['image']['alt']}}"
                    title="{{$document['image']['title']}}"/>
        </figure>
        @foreach($sections as $section)
            <section>
                <!-- Validators vēlas, lai izmantoju hedingu te, bet es viņu esmu novietojis figūrā(iepriekšējā elementā) -->
                <h2 class="hidden">{{$document['title']}}</h2>
                <ul>
                @foreach($section['content'] as $item)
                    <li>
                        <a href="{{$item['url']}}" target="_blank">
                            {{$item['title']}}
                        </a>
                    </li>
                @endforeach
                </ul>
            </section>
        @endforeach
    </main>
</x-layout>
