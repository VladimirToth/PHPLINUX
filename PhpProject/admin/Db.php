<?php

class Db {
    private $username = "root";
    private $password = "";
    private $server = "localhost";
    private $database = "students";
    private $link;

    public function __construct() {
        $this->link = mysqli_connect($this->server, $this->username, $this->password, $this->database) or die('Failed to connect.');
    }

    public function query($sql) {
        return mysqli_query($this->link, $sql);
    }

    public function __destruct() {
        mysqli_close($this->link);
    }
}

?>