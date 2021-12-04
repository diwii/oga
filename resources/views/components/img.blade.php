<!-- https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images -->
{{-- <img
srcset="{{$attributes['src']}} 1920w,
    {{$srcSet(1024)}},
    {{$srcSet(512)}}
    "
sizes=" (max-width: 512px) 512px,
    (max-width: 1024px) 1024px,
    (min-width: 1025px) 1920px,
    1024px"
{{$attributes}}/> --}}
{{-- <img
srcset="http://link/to/image.jpeg 1920w,
    http://link/to/image-1024.jpeg 1024w,
    http://link/to/image-512 512w"
sizes=" (max-width: 512px) 512px,
    (max-width: 1024px) 1024px,
    (min-width: 1025px) 1920px,
    1024px"
{{$attributes}}/> --}}
<picture>
    <source media="(min-width:1024px)" srcset="{{$attributes['src']}}">
    <source media="(min-width:512px)" srcset="{{$srcSet(1024)}}">
    <source media="(max-width:511px)" srcset="{{$srcSet(512)}}">
    <img {{$attributes}}>
</picture>
