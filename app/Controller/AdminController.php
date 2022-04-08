<?php
require_once dirname(__DIR__)."/Module/AdminModel.php";
    class AdminController{
        public function auth(){
                $admin = json_decode(file_get_contents("php://input"),true);

                $data['user_name'] = $admin['username'];
                $result = AdminModel::getAdmin($data);
                if($result->user_name === $admin['username'] && sha1($admin['password'], $result->password)){
                    echo "connected";
                }else{
                    echo 'undefined username or password';
                }
        }

        public function getAllClients(){
            $data = AdminModel::getAllClient();
            echo json_encode($data);
        }
        public function updateClient()
        {
            $data = json_decode(file_get_contents("php://input"),true);
            $stmt = AdminModel::updateUser($data);

            if ($stmt === 'ok'){
                echo json_encode(["message" => "modifier avec succèe"]);
            }

        }
        public function deleteClient($client)
        {

            $id = $client[2];
            $action = AdminModel::deleteClient($id);
            if ($action){
                echo "client supprimer";
            }
        }
    }
