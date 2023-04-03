<?php 

class Database {
    private function connect() {
        $str = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        return new PDO($str, DBUSER, DBPASS);
    }

    public function query($query, $data = [], $type = 'object') {
        $con = $this->connect();
        $stmt = $con->prepare($query);
        if($stmt) {
            $check = $stmt->execute($data);
            if($check) {     
                if($type == 'object') {
                    $type = PDO::FETCH_OBJ;
                } else {
                    $type = PDO::FETCH_ASSOC;
                }
                $result = $stmt->fetchAll($type);
                if(is_array($result) && count($result) > 0) {
                   return $result; 
                }
            }
        }
        return false;
    }

  public function create_tables() {
    $query = "CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `email` varchar(100) NOT NULL,
        `firstname` varchar(255) NOT NULL,
        `lastname` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `role` varchar(20) NOT NULL,
        `date` date DEFAULT NULL,
        PRIMARY KEY (`id`),
        KEY `email` (`email`),
        KEY `firstname` (`firstname`),
        KEY `lastname` (`lastname`),
        KEY `date` (`date`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $this->query($query);
  }

}