<?php
require_once "DatabaseModel.php";
    class AdminModel{
        static public function getAdmin($data)
        {
            $username = $data['user_name'];
            try {
                $db = DatabaseModel::connect()->prepare('SELECT * FROM admin WHERE user_name = :username');
                $db->execute(array(":username" => $username));
                return $db->fetch(PDO::FETCH_OBJ);
            } catch (PDOException $ex) {
                return 'error ' . $ex->getMessage();
            }
        }
    }