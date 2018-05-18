<?php
    $quest='http://api.openweathermap.org/data/2.5/weather?q=Rostov-na-Donu,ru&appid=f3d4855cbacbc20a8845e49073b854df';
    $resp=file_get_contents($quest);
    $json=json_decode($resp, true);

    echo "<pre>";
    print_r($json);
    echo "</pre>";
?>

<table>
	<?php foreach ($json as $value) { ?>
	<tr>		
		<td><?php echo "City name";?></td>
		<td><?php print_r($value[name]);?></td>
	</tr>
	<?php foreach ($value as $weather) { ?>
	<?php foreach ($weather as $description) { ?>
	<tr>		
		<td><?php echo "Today:";?></td>
		<td><?php print_r($description[main]);?></td>
	</tr>
	<?php } ?>
	<?php } ?>
	<?php foreach ($value as $main) { ?>
	<tr>		
		<td><?php echo "Temperature:";?></td>
		<td><?php print_r($main[temp]);?></td>
	</tr>
	<tr>
		<td><?php echo "Humidity:";?></td>
		<td><?php print_r($main[humidity]);?></td>
	</tr>
	<tr>
		<td><?php echo "Minimum temperature at the moment:";?></td>
		<td><?php print_r($main[temp_min]);?></td>
	</tr>
	<tr>
		<td><?php echo "Maximum temperature at the moment:";?></td>
		<td><?php print_r($main[temp_max]);?></td>
	</tr>
	<?php } ?>
	<?php foreach ($value as $wind) { ?>
	<tr>	
		<td><?php echo "Wind speed";?></td>
		<td><?php print_r($wind[speed]);?></td>
	</tr>
	<tr>
		<td><?php echo "Wind direction";?></td>
		<td><?php print_r($wind[deg]);?></td>
	</tr>
	<?php } ?>
	<?php } ?>
</table>