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

            curl_setopt($ch, CURLOPT_URL, 'ipinfo.io/189.90.191.98?token=2730886b5981a9');
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
            
            echo "<img src=\"https://dev.virtualearth.net/REST/v1/Imagery/Map/Road/". $arr['loc'] ."/12?mapSize=800,800&mapLayer=Basemap,Buildings&key=AlLKUFpKxYkRLKHj1HgaIxdlmapv50uc4cGjXE-6uLfF_jx7nwkuksGDtg-O2_iU\">"
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>