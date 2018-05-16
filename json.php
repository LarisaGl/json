<?php
    $quest='http://api.openweathermap.org/data/2.5/weather?q=Rostov-na-Donu,ru&appid=f3d4855cbacbc20a8845e49073b854df';
    $resp=file_get_contents($quest);
    $json=json_decode($resp);
    
    echo "<pre>";
    print_r($json);
    echo "</pre>";

?>