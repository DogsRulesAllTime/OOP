<?php


class LoginController{
    
    public function actionIndex(){
        echo 'Авторизация';
        require_once (ROOT . '/models/login.php');
        
        $b = Admin::checkDostup();
        
        // print_r($b);
        if (!empty($b)) {
            $_SESSION = $b;
           var_dump ($_SESSION);
       
        if ($b['dostup']==0) {
        	 header("location:  /upanel ");
        }else{
        	header("location:  /apanel ");
        }
 		}
        require_once (ROOT . '/views/login.php');
        
        
        return true;
    }
}