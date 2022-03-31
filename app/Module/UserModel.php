<?php
require_once "DatabaseModel.php";
    class UserModel{

        static public  function  addUser($data){
            $db = DatabaseModel::connect()->prepare('INSERT INTO users (nom, prenom, profession , date_de_naissance, reference) values 
                                        (:nom, :prenom, :profession, :ddn, :reference )');

            if ($db->execute($data)){
                echo 'valid';
            }
        }
//        static public  function  getUser(){
//            $db = DatabaseModel::connect()->prepare('SELECT * FROM users where refe');
//            return $db->execute();
//        }
        static public function getUserByRef($ref){
            $db = DatabaseModel::connect()->prepare('SELECT * FROM users where reference = :ref ');
//            check if query is executed
//            if query is excuted return first user from statment if not rturn falsE
            if ($db->execute(["ref"=>$ref])=== true){
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