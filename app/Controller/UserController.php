<?php
require_once dirname(__DIR__)."/Module/UserModel.php";
header("Access-Control-Allow-Origin:*");
    class UserController{
        public function addUser()
        {

                $data =json_decode(file_get_contents("php://input"),true);
                $reference = strtoupper(uniqid());
                $datadata = array(
                    'nom' => $data['nom'],
                    'prenom' => $data['prenom'],
                    'profession' => $data['profession'],
                    'ddn' => $data['date'],
                    'reference' => $reference
                );
                $userId = UserModel::addUser($datadata);
                if($userId){
                    echo json_encode(["reference" => $reference, "id" => $userId]);
                    return;
                } else{
                    echo "Wrong ID";
                }
        }


//        public function userCheck()
//        {
//            if (isset($_POST['submit'])){
//                $value = strtoupper($_POST['reference']);
//                $result = UserModel::getUser();
//                if ($result !== 'ok'){
////                    var_dump($value);
////                    die();
//                    if ($value === 'reference'){
//                        echo " User is valid";
//
//                        header('location:../rdv');
//                    }
//                }
//            }
//        }

        public function checkByRef()
        {
                $data =json_decode(file_get_contents("php://input"));

                $key = strtoupper($data->reference);
                $result = UserModel::getUserByRef($key);
                if ($result !== 'ok'){
                    echo json_encode($result);
                }else{
                    echo json_encode(array(
                        'error' => 'no connection'
                    ));
                }
        }
        public function getAllUsers(){
            $result = UserModel::selectAllUsers();
            var_dump($result);
            echo json_encode($result);
        }
    }