<?php 

class Koneksi {
    protected $conn;

    public function __construct() {
        $this->conn = $this->DBConnect();
    }

    public function DBConnect(){
        $dbhost = 'localhost';
        // $dbname = 'id20934794_projectaas';
        // $dbuser = 'id20934794_naura';
        // $dbpass = 'N@ur4siti';

        $dbname = 'projectaas';
        $dbuser = 'root';
        $dbpass = '';

        try {
            $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            $dbConnection->exec("set names utf8");
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return  $dbConnection;
        }
        catch (PDOException $e) {
            return 'Connection failed: ' . $e->getMessage();
        }
    }
}



?>