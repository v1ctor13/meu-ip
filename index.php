<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style//style.css">
  </head>
  <body class="bg-dark">
    <div class="home container-fluid text-center">
        <div class="container-fluid text-primary"> SEU IP É: </div>
        <?php
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
    <div class="details container-fluid text-center">
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
        DETAILS
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>