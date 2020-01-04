<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Examen Piero Collao</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
            .title {
                font-size: 84px;
            }

        </style>
    </head>
    <body>
        <div class="position-ref full-height">
        	<h3>Resultado</h3>
        	<table border="1" width="300px">
            @foreach ($resultado as $linea1)
			    <tr>
            		@foreach ($linea1 as $linea2)
			    		<td>{{ $linea2 }}</td>
			    	@endforeach
			    </tr>
			@endforeach
			</table>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</html>
