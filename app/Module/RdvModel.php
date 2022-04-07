<?php
    class RdvModel{

        static public function creatRdv($data){
            $db = DatabaseModel::connect()->prepare('INSERT INTO rdv (date, creneau , sujet , user_id) values 
                                        (:date, :creneau, :sujet, :user_id)');

            return $db->execute($data);
        }

        public static function getAllRdv($id)
        {
            $con = DatabaseModel::connect();
            $db = $con->prepare('SELECT * FROM Rdv
            WHERE user_id = '.$id);
            if ($db->execute()){
                return $db->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        static public function getAllRdvData(){
            $con = DatabaseModel::connect();
            $db = $con->prepare('SELECT * FROM Rdv , useres WHERE rdv.user_id = users.id');
            $isExecuted = $db->execute();
            return $isExecuted && $db->fetchAll(PDO::FETCH_ASSOC);
        }
        static public function updateRdv(){
            $con = DatabaseModel::connect();
            $db = $con->prepare('UPDATE rdv SET date = :date , creneau = :creneau , sujet = :sujet');
            return $db->execute();
        }

        public static function deleteRdv($id)
        {
            $db = DatabaseModel::connect()->prepare('DELETE  FROM rdv  WHERE id = ?');
            if ($db->execute([$id])){
                echo json_encode(["message" =>"Deleted Succefully"]);
            }
        }
}