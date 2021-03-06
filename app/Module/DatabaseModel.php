<?php

    class DatabaseModel {
        private $servername;
        private $dbname;
        private $user;
        private $password;
        private $charset;

        static public function connect()
        {
            $dbname = "architecte_rdv";
            $host = "localhost";
            $user = "root";
            $password = "";

            try {
                $dsn = "mysql:host=".$host.";dbname=".$dbname.";charset=utf8mb4";
                $pdo = new PDO($dsn, $user, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch (PDOException $e) {
                echo "Error 404" . $e->getMessage();
            }
        }
    }
