<?php 

class DBModel{
    public function connect(){
        $mysqli = new mysqli("localhost","root","","qttb");

        // Check connection
        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        return $mysqli;
    }
}

?>