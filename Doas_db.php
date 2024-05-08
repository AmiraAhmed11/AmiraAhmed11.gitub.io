<?php
class Doas_db {
    private $host = "";
    private $username = "root";
    private $password = "";
    private $database = "ISLAMIC_WEB";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAllDoas() {
        $query = "SELECT * FROM doas";
        $result = $this->conn->query($query);
        $doas = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $doas[] = $row;
            }
        }
        return $doas;
    }
}
?>
