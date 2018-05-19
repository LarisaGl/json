<?php
    $quest='http://api.openweathermap.org/data/2.5/weather?q=Rostov-na-Donu,ru&appid=f3d4855cbacbc20a8845e49073b854df';
    $resp=file_get_contents($quest);
    $json=json_decode($resp, true);
?>

<table>
	<tr>		
		<td><img src="http://www.iconsearch.ru/uploads/icons/aquanox/128x128/globe.png"></td>
		<td><b><?php echo "City name:";?></b></td>
		<td><?php echo $json['name'];?></td>
	</tr>
	<tr>
		<td><img src="http://remont-kraski.ru/images/services/services4/remont6/2.png"></td>		
		<td><b><?php echo "Temperature:";?></b></td>
		<td><?php echo $json['main']['temp'];?></td>
	</tr>
	<tr>
		<td><img src="http://icdn.pro/images/es/t/i/tiempo-sol-nube-icono-9235-128.png"></td>		
		<td><b><?php echo "Today:";?></b></td>
		<td><?php echo $json['weather']['0']['main'];?></td>
	</tr>
	<tr>
		<td><img src="https://images.freeimages.com/images/premium/large-thumbs/2622/26221249-water-drop.jpg"></td>
		<td><b><?php echo "Humidity:";?></b></td>
		<td><?php echo $json['main']['humidity'];?></td>
	</tr>
	<tr>
		<td><img src="http://www.lotusite.ru/images/userfiles/images/i(33).jpeg"></td>
		<td><b><?php echo "Minimum temperature at the moment:";?></b></td>
		<td><?php echo $json['main']['temp_min'];?></td>
	</tr>
	<tr>
		<td><img src="http://www.lotusite.ru/images/userfiles/images/i(33).jpeg"></td>
		<td><b><?php echo "Maximum temperature at the moment:";?></b></td>
		<td><?php echo $json['main']['temp_max'];?></td>
	</tr>	
	<tr>
		<td><img src="https://st2.depositphotos.com/3557671/9239/v/170/depositphotos_92394144-stock-illustration-wind-generator-icon-on-white.jpg"></td>	
		<td><b><?php echo "Wind speed";?></b></td>
		<td><?php echo $json['wind']['speed'];?></td>
	</tr>
	<tr>
		<td><img src="http://s1.iconbird.com/ico/0612/VistaStyleWeatherIconsSet/w256h2561339359708WindFlagStorm.png"></td>
		<td><b><?php echo "Wind direction";?></b></td>
		<td><?php echo $json['wind']['deg'];?></td>
	</tr>
</table>