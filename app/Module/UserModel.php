<?php
require_once "DatabaseModel.php";
    class UserModel{



        static public  function  addUser($data){
            $connect = DatabaseModel::connect();
            $db = $connect->prepare('INSERT INTO users ( nom, prenom, profession , date_de_naissance, reference) values 
                                        (:nom, :prenom, :profession, :ddn, :reference )');
            return $db->execute($data) ? $connect->lastInsertId() : false;
        }
//        static public  function  getUser(){
//            $db = DatabaseModel::connect()->prepare('SELECT * FROM users where refe');
//            return $db->execute();
//        }
        static public function getUserByRef($ref){
            $db = DatabaseModel::connect()->prepare('SELECT * FROM users where reference = :ref ');
            if ($db->execute(["ref"=>$ref]) === true){
                return $db->fetch(PDO::FETCH_ASSOC);
            }else{
                return false;
            }
        }

        public static function selectAllUsers()
        {
            $db = DatabaseModel::connect()->prepare('SELECT * FROM users');
            $isExecuted = $db->execute();
            return $isExecuted && $db->fetchAll(PDO::FETCH_ASSOC);
        }
    }