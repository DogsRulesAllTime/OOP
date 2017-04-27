<?php

    
class UserPanelController{
    
    public function actionIndex(){
        echo 'Юзерская  панель';
    }


    public function actionLogin(){
        echo 'Авторизация';
        require_once (ROOT . '/models/login.php');
        $a = Admin::checkLogin();
        print_r($a);
        
        require_once (ROOT . '/views/login.php');
        
        
        return true;
    }
}


?>