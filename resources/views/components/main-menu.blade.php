<!-- Main menu -->
<button id="menuButton" onclick="action()">
    <img src="{{ asset('/storage') }}/images/icons/menu.svg" id="openIcon" alt="Open menu">
    <img src="{{ asset('/storage') }}/images/icons/cross.svg" id="closeIcon" class="hidden" alt="Close menu">
</button>
<nav id="mainMenu">
    @foreach($menuItems as $item)
        <a href="{{$item['link']}}" class="{{$item['class']}}">{{$item['name']}}</a>
    @endforeach
</nav>