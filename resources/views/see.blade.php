<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seerosen-Teich</title>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style></style>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @for ($i = 0; $i < $anzahl; $i++)
        @for ($j = 0; $j < $anzahl; $j++)
        <seerose 
            src="img/{{ $daten[$i]["image"] }}"
            left="{{ $i * 50 . "px" }}"
            top="{{ $j * 50 . "px" }}"
            width="{{ $breite }}"
        ></seerose>
        @endfor
        @endfor
    </div>
</body>
</html>

<?php
/*
//echo "<img src='img/blatt.png' width='$breite'>";
for ($i = 0; $i < $anzahl; $i++) {
    echo '<img 
        src="img/'.$daten[$i]["image"].'" 
        style="position:absolute; top: '.$daten[$i]["top"].'; left: '.$daten[$i]["left"].'" 
        width="' . $breite . '"
    >';
}
//echo '<img src="img/blatt.png" width="$breite">';
*/