<?php

//include_once ROOT. '/models/admin.php';

class IndexController{
    
    public function actionView(){
    	
    	require_once (ROOT . '/views/index.php');


       return true;
    }

}