<!doctype html
<html lang="en">
  <head>
    <title>Meu ip</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style//style.css">
  </head>
  <body>
    <div class="home">
        <?php
            include("imprimirTabela.php");

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'ipinfo.io/189.90.191.98?token={api_key}');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $arr = json_decode(curl_exec($ch), true);
            curl_close($ch);

            echo '<p>' . $arr['ip'] . '</p>';
        ?>
    </div>
    <div class="arrow-icon text-center">
        <img src="img/down-arrow.png">
    </div>
    <div class="details text-center">
        <?php
            imprimirTabela($arr);
            $coord = explode(",", $arr['loc']);

            echo "<img src=\"https://dev.virtualearth.net/REST/v1/Imagery/Map/Road/". $arr['loc'] ."/12?mapSize=800,800&mapLayer=Basemap,Buildings&key={api_key}\">"
        ?>
    </div>
    <footer class="text-center">
        © by v1ctor <br>
        2022 <br>

        <div class="contact">
            <a href="https://github.com/v1ctorvinicius" target="_blank"><img src="img/github.png"></a> 
            <a href="https://www.linkedin.com/in/victor-santos-3b0908244/" target="_blank"><img src="img/linkedin.png"></a> 
            <a href="http://v1ctor.epizy.com"><img src="img/portfolio.png" target="_blank"></a> 
        </div>
    </footer>
</body>
</html>
