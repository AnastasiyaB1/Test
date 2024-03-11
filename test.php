<?php
    require_once 'classes/Test.php';

    $class = new Test;
    $result = $class->testCharacters('Hello! World,');
?>

<html lang="RU">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<title>Тестовое</title>
	</head>
	<body>
		<p>До: 'Hello! World,'</p>
        <p>После: <?= $result ?></p>
    </body>
</html>