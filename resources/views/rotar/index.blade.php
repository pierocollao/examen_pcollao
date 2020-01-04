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

            <p>1.- Completar el input con el valor N para la matriz de NxN (por ejemplo 3x3)</p>
            <p>2.- Completar todos los input generados y presionar el botón Ver para enviar por POST la matriz hacia una tabla con la matriz modificada</p>
            <form method="post" action="/ver">
            @csrf
            <label for="dimension">Dimension de la matriz</label>
            <input class="form-control" type="number" name="dimension" id="dimension">
            <button class="" onclick="generarInputs(dimension.value);">Generar matriz</button>

            <div id="container"></div>
            <input style="display: none;" id="boton_pintar" type="submit" name="" value="Ver">
            </form>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            generarInputs = function(valor){
                event.preventDefault();
                html = '<table width="150px">';
                for (var i = 0; i < valor; i++) {
                    html += '<tr>';
                    for (var j = 0; j < valor; j++) {
                        html += '<td><input style="width: 45px" name="valores['+i+']['+j+']" type="number" class="elemento_matriz"></td>';
                    }
                    html += '</tr>';
                }
                html += '</table>';
                $('#boton_pintar').show();
                $('#container').html(html);

            };

            generarMatriz = function(dimension){
                event.preventDefault();
                var arr = [];
                var arr2 = [];
                var i = 0;
                var j = 0;
                $('.elemento_matriz').each(function(k,v){
                    arr2 = [];
                    console.log($(v).val());
                    dimension2 = (dimension*dimension - 1);
                    for (i = 0; i < dimension2; i++) {
                       if(i < dimension){
                            arr2.push($(v).val());
                       }else{
                            arr.push(arr2);
                       }
                    }
                    console.log(arr);
                });
            }
        });
    </script>
</html>
