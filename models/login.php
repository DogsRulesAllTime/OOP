<?php
/**
* 
*/
class Admin 
{
	
	

	public static function checkLogin(){
		$db = Db::getConnection();
            if (isset($_POST['subm'])) {  
                 echo 'Кнопка нажата!';
                if (isset($_POST['login'],$_POST['psw'])) {
      $login = $_POST['login'];
       $password = $_POST['psw'];

                
		$result = $db->query("SELECT * FROM `account` WHERE `login` = $login AND
        `psw` = $password");
        $result->setFetchMode(PDO::FETCH_ASSOC);
		$item = $result->fetch();
//         $row_cnt = $result->num_rows;
                  if(empty($item)){
                      echo "wrong";
                  }else{
                      echo "succes";
                  }
//        if ( mysql_num_rows($result ) == 0) {
//
//      echo "пароль или логин не верный!";
//			
		
	}
    }
    }
//return $item;

}
