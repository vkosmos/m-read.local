<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- Style --}}
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>

    <body>

        <div class="random visually-hidden" data-random="{{$random}}"></div>

        <main>

            <h1>Считывание информации</h1>

            <div class="container">

                <div class="sample visually-hidden"></div>

            </div>

            <p class="text">
                Какой цвет имеет скрытый прямоугольник?
            </p>

            <form method="POST" action="{{route('saveExperimentData')}}">
                @csrf
                <input type="hidden" name="link" value="{{$link}}">
                <input class="input__random" type="hidden" name="random" value="{{$random}}">
                <input class="input__success" type="hidden" name="success" value="">

                @for($i = 0; $i <= $max; $i++)
                    <label><input class="input__decision" type="radio" name="value1" value="{{$values[$i]->value['value']}}">{{$values[$i]->value['title']}}<label><br>
                @endfor

                <button class="button__set" tyle="submit">Ответить</button>
            </form>
            <p>{{$participant_name}}</p>

        </main>

        <script type="text/javascript" src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

    </body>
</html>
