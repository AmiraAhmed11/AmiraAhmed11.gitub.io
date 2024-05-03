<?php
class LocationDB {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "ISLAMIC_WEB";

    public function saveLocation($latitude, $longitude) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO locations (latitude, longitude) VALUES ('$latitude', '$longitude')";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }

        $conn->close();
    }
}
?>


