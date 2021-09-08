<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    @php
        $color = 'red';
        $alert ='alert2';
    @endphp
    <body >
        <div class="container mx-auto">
            <x-alert :color="$color">
                <x-slot name="title">Titulo 1</x-slot>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies lacinia nulla, id pretium urna mollis eu. Vivamus cursus, lectus sit amet mattis viverra, metus ante vulputate massa, id feugiat arcu nibh ut magna. In sed justo sem. Vestibulum sit amet porttitor mi. Curabitur nulla enim, venenatis eu hendrerit ac, rutrum non justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla vulputate varius tortor et sagittis. Maecenas leo sem, dapibus a efficitur vel, ullamcorper in leo. Sed tempus lorem eu ligula aliquam tincidunt. Sed ullamcorper urna iaculis eros luctus, sed faucibus justo commodo. Integer eu lacus condimentum, malesuada erat quis, tristique dolor. Vestibulum eu placerat diam. Proin tincidunt, erat eget dignissim mollis, enim est consectetur augue, eu laoreet est purus vitae nisl. Cras posuere sagittis ornare. Sed orci ex, dapibus non porttitor at, gravida et metus. Maecenas dictum dolor et sollicitudin finibus. 
            </x-alert>
            
            <x-alert2 color="blue">
                <x-slot name="title">Titulo 2</x-slot>
                Hola mundo
            </x-alert2>
            
            <x-dynamic-component :component="$alert">
                <x-slot name="title">Titulo 2</x-slot>
                Hola mundo
            </x-dynamic-component>
        </div>
    </body>
</html>
