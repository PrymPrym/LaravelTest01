<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
           </style>
    </head>
    <body>
		<table id="film_desk" class='table table-bordered table-striped'>		
				<thead>
				<tr><th colspan='4'>Расписание киносеансов</th></tr>			
				<tr id="main_row"><td>Начало сеанса</td><td>Название фильма</td><td>Возрастная категория</td><td>Цена билета</td></tr>
				</thead>
				<tbody id='film_desk'>
				@foreach ($films as $film)
					<tr class='film_row'><td> {{$film->starts}} </td><td>{{$film->filmname}}</td><td>{{$film->category}}</td><td>{{$film->price}}</td></tr>
				@endforeach
				</tbody>
		</table>
    </body>
    <script src="{{ asset('js/app.js') }}" ></script>
</html>
