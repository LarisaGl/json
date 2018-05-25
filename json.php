<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Погода</title>
</head>
<body>

<?php
    $quest='http://api.openweathermap.org/data/2.5/weather?q=Rostov-na-Donu,ru&appid=f3d4855cbacbc20a8845e49073b854df';
    $resp=file_get_contents($quest);
    if ($resp === false) {
    	die("Не удалось получить данные");
    }
    $json=json_decode($resp, true);
    if ($json === null) {
    	die("Ошибка декодирования json"); }
?>

<table>
	<tr>		
		<td><img src="img/globe.png"></td>
		<td><b><?php echo "City name:";?></b></td>
		<td><?php if (!empty($json['name'])) { echo $json['name']; } else { echo 'Не удалось получить название города'; } ?></td>
	</tr>
	<tr>
		<td><img src="img/2.png"></td>		
		<td><b><?php echo "Temperature:";?></b></td>
		<td><?php if (!empty($json['main']['temp'])) { echo $json['main']['temp']; } else { echo 'Не удалось получить данные температуры'; } ?></td>
	</tr>
	<tr>
		<td><img src="img/tiempo-sol-nube-icono-9235-128.png"></td>		
		<td><b><?php echo "Today:";?></b></td>
		<td><?php if (!empty($json['weather']['0']['main'])) { echo $json['weather']['0']['main']; } else { echo 'Не удалось получить данные погоды'; } ?></td>
	</tr>
	<tr>
		<td><img src="img/26221249-water-drop.jpg"></td>
		<td><b><?php echo "Humidity:";?></b></td>
		<td><?php if (!empty($json['main']['humidity'])) { echo $json['main']['humidity']; } else { echo 'Не удалось получить данные погоды'; } ?></td>
	</tr>
	<tr>
		<td><img src="img/i(33).jpeg"></td>
		<td><b><?php echo "Minimum temperature at the moment:";?></b></td>
		<td><?php if (!empty($json['main']['temp_min'])) { echo $json['main']['temp_min']; } else { echo 'Не удалось получить данные температуры'; } ?></td>
	</tr>
	<tr>
		<td><img src="img/i(33).jpeg"></td>
		<td><b><?php echo "Maximum temperature at the moment:";?></b></td>
		<td><?php if (!empty($json['main']['temp_max'])) { echo $json['main']['temp_max']; } else { echo 'Не удалось получить данные температуры'; } ?></td>
	</tr>	
	<tr>
		<td><img src="img/depositphotos_92394144-stock-illustration-wind-generator-icon-on-white.jpg"></td>	
		<td><b><?php echo "Wind speed";?></b></td>
		<td><?php if (!empty($json['wind']['speed'])) { echo $json['wind']['speed']; } else { echo 'Не удалось получить данные о скорости ветра'; } ?></td>
	</tr>
	<tr>
		<td><img src="img/w256h2561339359708WindFlagStorm.png"></td>
		<td><b><?php echo "Wind direction";?></b></td>
		<td><?php if (!empty($json['wind']['deg'])) { echo $json['wind']['deg']; } else { echo 'Не удалось получить данные о направлении ветра'; } ?></td>
	</tr>
</table>

</body>
</html>