<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Data ko data.txt mein append karo
    $file = fopen("data.txt", "a");
    fwrite($file, "Latitude: " . $latitude . ", Longitude: " . $longitude . "\n");
    fclose($file);
}
?>
