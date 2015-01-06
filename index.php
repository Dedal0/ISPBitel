<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes, minimum-scale=1.0">
		<title>Bitel deja que vean tu número de teléfono</title>
		<style>
			body {
				font: 17px sans-serif;
				color: #444;
				margin: 20px;
			}
			
		</style>
	</head>
	<body>
<?php

$headers = apache_request_headers();

foreach ($headers as $header => $value) {
	if ($header == 'x-up-calling-line-id') {
		$phone_number = $value;
		break;
	}
}

if (isset($phone_number)) {
	echo "<p>Tu # es:</p><h1>" . $value . "</h1><p>Esto se envia a todas las páginas que visitas.</p> <br />";
        echo "<a href=\"http://www.ip-adress.com/\"> Click aquí para ver quien es tu ISP</a>";

} else {
	echo '<p>No se encontró ningun telefono, apaga el wifi e<a href="./">intentalo denuevo</a>.</p>';
}

?>
		<p><a href="https://gist.github.com/1675764">Codigo base.</a>.</p>

	</body>
</html>
