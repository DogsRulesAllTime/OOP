<?php


class LoginController{
    
    public function actionIndex(){
        echo 'Авторизация';
        require_once (ROOT . '/models/login.php');
        
        $b = Admin::checkDostup();
        
        print_r($b);
        require_once (ROOT . '/views/login.php');
        
        
        return true;
    }
}