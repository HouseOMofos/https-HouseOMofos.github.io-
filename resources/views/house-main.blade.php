<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HouseOmofos</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    @php
        $cache_version = env('CACHE_VERSION');
    @endphp
        <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css?v={{ $cache_version }}"/>

    {{--    --}}
    <script>
        $( function() {
            $( ".house-person" ).draggable({ containment: "#containment-wrapper", scroll: false , revert: "invalid" });
            $( ".house-dropbox" ).droppable({
                drop: function( event, ui ) {
                    $( this )
                        .addClass( "ui-state-highlight" )
                        .find( "p" )
                        .html( "Dropped!" );
                    var draggable = ui.draggable;
                    var personid = draggable.attr('data-id');
                    console.log(personid);
                    $( ".house-test[data-id=" + personid + "]" ).addClass('show');
                }
            });
        } );
    </script>

</head>

<body>
{{-- navigation bar --}}
@include('components.house-menu')
{{-- banner --}}
@include('components.house-banner')
{{-- team --}}
@include('components.house-team')

@include('scripts.house-bachops')
@include('scripts.house-anthony')
@include('scripts.house-jovan')
</body>

{{--  Scripts  --}}
<script language="javascript" src="/js/require.js?v={{ env('CACHE_VERSION') }}"></script>
<script language="javascript" src="/js/init.js?v={{ env('CACHE_VERSION') }}"
        attr-cache-version="{{ env('CACHE_VERSION', NOW()) }}" attr-lang="{{ app()->getLocale() }}"></script>


</html>
