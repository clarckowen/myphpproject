<title>Db Connection</title>
<?php

  class myDb {


      public $host = "127.0.0.1";
      public $username = "root";
      public $password = "";
      public $dbname = "db_test";


      public function connect() {

        try {

          $this->conn = new PDO("mysql:host=". $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
          $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::FETCH_ASSOC);
          return $this->conn;
        } catch(Exception $e) {
          echo "Database Connection Failed " . $e->getMessage();
        }

      }
  }

  $db = new myDb();

  $db->connect();

 ?>
