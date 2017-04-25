<?php

include_once ROOT. '/models/admin.php';

class AdminPanelController{
    
    public function actionIndex(){
    	$zapiskiList = array();
    	$zapiskiList = Admin::getZapiskiList();
    	require_once (ROOT . '/views/apanel.php');


        echo 'Админская панель';
        echo "<pre>";
        print_r($zapiskiList);


        return true;
    }

    public function actionView($id){
		$zapiska = array();
    	$zapiska = Admin::getZapiskiById($id);
    	
        echo 'Определенная записка';
        require_once (ROOT . '/views/zapiska.php');
        echo '<br>'.$id;
        return true;
    }
}