<?php
require_once dirname(__DIR__)."/Module/RdvModel.php";
header("Access-Control-Allow-Origin:*");
class RdvController{

    public function addRdv(){
            $data = json_decode(file_get_contents("php://input"),true);
            var_dump($data);
            $datadata = [
                'date' => $data['date'],
                'creneau' => $data['creneau'],
                'sujet' => $data['sujet'],
                'user_id' => $data['user_id']
            ];
             var_dump($datadata);
            $result = RdvModel::creatRdv($datadata);
            return $result;
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
}