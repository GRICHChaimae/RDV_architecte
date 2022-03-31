<?php
require_once dirname(__DIR__)."/Module/UserModel.php";
    class UserController{
        public function getUser()
        {

            if (isset($_POST['submit'])){
                $reference = strtoupper(uniqid());
                $data = array(
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'profession' => $_POST['profession'],
                    'ddn' => $_POST['ddn'],
                    'reference' => $reference
                );
                $result = UserModel::addUser($data);
                if($result !== 'ok'){
                    echo json_encode(["message"=>"success", "reference"=>$reference]);
                    return ;
                } else{
                    echo "Wrong ID";
                }
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
            if (isset($_POST['submit'])){
                $value = strtoupper($_POST['reference']);
                $result = UserModel::getUserByRef($value);
                if ($result !== 'ok'){
                    echo json_encode($result);

                }
            }
        }
        public function getAllUsers(){
            $result = UserModel::selectAllUsers();
            var_dump($result);
            echo json_encode($result);
        }
    }