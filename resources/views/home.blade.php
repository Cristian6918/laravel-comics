<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
@include('partials/header')
<main>
    @include('partials.hero')

    <div class="film-container">
        <div class="series-label">CURRENT SERIES</div>
        <div clasS='container'>
            @foreach ($comics as $index => $comic)
                <div class='film-card'>
                    <a href="details/{{ $index }}">
                        <div class="image-container">
                            <img class="film-img" src='{{ $comic['thumb'] }}' alt=''>
                        </div>
                        <div class="title-container">
                            {{ $comic['title'] }}
                        </div>
                    </a>
                </div>
            @endforeach




        </div>
        <button>Load More</button>
    </div>
    @include('partials.banner')
</main>
<footer>
    @include('partials.footer')
</footer>


<body>

</body>

</html>
