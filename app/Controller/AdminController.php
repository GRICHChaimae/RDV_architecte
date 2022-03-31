<?php
require_once dirname(__DIR__)."/Module/AdminModel.php";
    class AdminController{
        public function auth(){
            if(isset($_POST['submit'])){
                $data['user_name'] = $_POST['username'];
                $result = AdminModel::getAdmin($data);
                if($result->user_name === $_POST['username'] && sha1($_POST['password'])===$result->password){

                    $_SESSION['username'] = $result->username;
                   header('location: ./Dashboard');

                }else{
                    echo 'undefined username or password';
                }
            }
        }
    }
