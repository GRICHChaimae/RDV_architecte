<?php
require_once dirname(__DIR__)."/Module/RdvModel.php";
header("Access-Control-Allow-Origin:*");
class RdvController{

    public function addRdv(){
            $data = json_decode(file_get_contents("php://input"),true);
            $result = RdvModel::creatRdv($data);
            echo json_encode($result);
    }

    public function getAllRdv($id)
    {
            $method = $id[2];
            $data = RdvModel::getAllRdv($method);
            echo json_encode($data);
    }

    public function delete($id)
    {
        $rdv = $id[2];
        $result = RdvModel::deleteRdv($rdv);
        if ($result){
            echo "delete succesful";
        }
    }
    public function update(){
        $data = json_decode(file_get_contents("php://input"),true);
        $result = RdvModel::updateRdv($data);
        if ($result === 'ok'){
            echo "updated succesful";
        }
    }
    static function checkDate()
    {
        $data = json_decode(file_get_contents("php://input"),true);

        $result = RdvModel::getDateCreneau($data["date"]);
        if ($result){
            echo json_encode($result);
        }
    }
}