<!doctype html <html lang="en">

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
		// ini_set('display_errors', 1);
		// error_reporting(E_ALL);

		include("set_env.php");
		include("imprimirTabela.php");

		$curl_session = curl_init();

		$client = $_SERVER['REMOTE_ADDR'];

		$ipinfo_token = getenv('IPINFO_TOKEN');

		$url = 'ipinfo.io/' . $client . '?token=' . $ipinfo_token;

		curl_setopt($curl_session, CURLOPT_URL, $url);
		curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);

		$arr = json_decode(curl_exec($curl_session), true);

		curl_close($curl_session);

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
		$bing_maps_token = getenv('BING_MAPS_TOKEN');

		echo "<img src=\"https://dev.virtualearth.net/REST/v1/Imagery/Map/Road/" . $arr['loc'] . "/12?mapSize=800,800&mapLayer=Basemap,Buildings&key=" . $bing_maps_token . "\">";

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