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
        static public function getAllClient(){
            $con = DatabaseModel::connect();
            $db = $con->prepare('SELECT * FROM users ORDER BY id ASC');
            if ($db->execute()){
                return $db->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        public static function updateUser($newData)
        {
            $db = DatabaseModel::connect()->prepare('UPDATE users SET 
            nom = :nom , prenom = :prenom , date_de_naissance = :ddn , profession = :profession
            WHERE id = :id');
            if ($db->execute($newData)){
               return ' ok';
            }
        }

        public static function deleteClient($id)
        {
            $db = DatabaseModel::connect()->prepare('DELETE  FROM users  WHERE users.id = ?');
            if ($db->execute([$id])){
               echo json_encode(["message" =>"Deleted Succefully"]);
            }
        }
    }