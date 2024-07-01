<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/style.css">
    <title>LARAVEL COMICS</title>
</head>

<body>
    @include('partials.header')

    <h1 class="text-center display-2 fw-bold text-warning mt-4">COMICS LIST</h1>

    <div class="row mx-0  justify-content-center">
        <div class="col-10 px-0 ">
            <div class="row mx-0 my-4 justify-content-around">
                @foreach ($comics as $comic)
                    <div class="col-3 px-0 my-4 px-4">
                        <div class="card cardBox border-2">
                            <img src="{{ $comic['thumb'] }}" class="card-img object-fit-fill"></img>

                            <div
                                class="card-img-overlay cardInfoBox text-white fw-bold text-center p-2 bg-black overflow-auto lh-lg">
                                <div><span class="subtitle">TITLE: </span> <br>{{ $comic['title'] }}</div>
                                <div><span class="subtitle">TYPE: </span>{{ $comic['type'] }}</div>
                                <div><span class="subtitle">GENRES: </span>{{ $comic['series'] }}</div>
                                <div><span class="subtitle">PRICE: </span>{{ $comic['price'] }}</div>
                                <div><span class="subtitle">SALE DATE: </span>{{ $comic['sale_date'] }}</div>
                                <div><span class="subtitle">DESCRIPTION: </span> <br>{{ $comic['description'] }}</div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
