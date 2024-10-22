<?php
if(isset($_GET['lat']) && isset($_GET['lon'])) {
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    $file = fopen("data.txt", "a");
    fwrite($file, "Lat: " . $lat . " Lon: " . $lon . "\n");
    fclose($file);
}
?>
