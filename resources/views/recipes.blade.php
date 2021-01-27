<x-layout pageTitle="{{$page['title']}}">
    <!-- Main content of the site -->
    <!-- Page Content -->
    <main id="recipesPage">
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
                {{-- Recipe category --}}
                <header>
                    <h2 class="categoryTitle {{$section['accentColor']}}">{{$section['title']}}</h2>
                </header>
                {{-- Recipes --}}
                @foreach($section['content'] as $recipe)
                <div class="split">
                    <div class="contentWrapper">
                        <div>
                            {{-- Recipe Title --}}
                            <h2>{{$recipe['title']}}</h2>
                            {{-- Recipe Table --}}
                            <table>
                                <thead>
                                    <tr>
                                    @foreach ($recipe['table']['head'] as $data)
                                        <th>{{$data}}</th>
                                    @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recipe['table']['body'] as $row)
                                    <tr>
                                    @foreach ($row as $data)
                                        <td>{{$data}}</td>
                                    @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- Recipe paragraphs --}}
                            @foreach ($recipe['paragraphs'] as $paragraph)
                            <p>{{$paragraph}}</p>
                            @endforeach
                        </div>
                    </div>
                    {{-- Recipe Image --}}
                    <div class="imageWrapper">
                        <x-img src="{{$recipe['image']['url']}}"
                                title="{{$recipe['image']['title']}}"
                                alt="{{$recipe['image']['alt']}}" />
                    </div>
                </div>
                @endforeach
            </section>
        @endforeach
    </main>
</x-layout>