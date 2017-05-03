<?php


class UserPanelController{
    
   // ГЛавная страницы
    public function actionIndex(){
    	
        echo 'Юзерская  панель';
        require_once (ROOT . '/views/upanel.php');
        return true;
    }

    // Выводит все записку относящиеся к этому пользователю
     public function actionStory(){
     	require_once (ROOT . '/models/user.php');
     	$zap = User::getList();
        echo 'Юзерская  панель/history';
        echo "<pre>";
        print_r($zap);
  		return true;
    }
    // Позволяет создать новую заявку 
    public function actionCreate(){
        echo 'Юзерская  панель/create';
        return true;
    }
    //  Переход в Базу знаний
    public function actionKnowledge(){
        echo 'Юзерская  панель/znaniya';
        return true;
    }
    // переход в профиль пользователя
    public function actionProfile(){
        echo 'Юзерская  панель/profile';
        return true;
    }
    // выход из системы
    public function actionExit(){
        echo 'Юзерская  панель/exit';
        return true;
    }
}