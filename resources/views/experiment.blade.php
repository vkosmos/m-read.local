<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- Style --}}
        <style>
            body {
                background-color: #ddd;
            }

            main {
                display: flex;
                flex-direction: column;

            }

            .sample {
                width: 600px;
                min-height: 450px;
                background: #ddd;
                border: 1px solid red;
            }

        </style>

    </head>

    <body>

        <main>
            <h1>Считывание информации</h1>

            <div class="sample">

            </div>

            <p class="text">
                Какой цвет имеет скрытый прямоугольник?
            </p>

            <form method="POST" action="{{route('saveExperimentData')}}">
                @csrf
                <label><input type="radio" name="color" value="white">Белый<label><br>
                <label><input type="radio" name="color" value="black">Черный<label><br>

                <button tyle="submit">Ответить</button>
            </form>

        </main>




    </body>
</html>
