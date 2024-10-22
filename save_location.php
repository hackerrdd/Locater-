<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Append data to data.txt
    $file = fopen("data.txt", "a");
    fwrite($file, "Latitude: " . $latitude . ", Longitude: " . $longitude . "\n");
    fclose($file);
}
?>
