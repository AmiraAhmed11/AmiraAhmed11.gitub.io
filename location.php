<?php
include 'location_db.php';

if(isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Save location data to database
    $db = new LocationDB();
    $db->saveLocation($latitude, $longitude);
}
?>
