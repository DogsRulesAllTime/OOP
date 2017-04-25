<?php
/**
* 
*/
class Admin 
{
	
	

	public static function getZapiskiList(){
		$db = Db::getConnection();
		$zapiskiList = array();

		$result = $db->query('SELECT * FROM `users`');

		$i=0;
		while ($row = $result->fetch()) {

			$zapiskiList[$i]['id'] = $row['id'];
			$zapiskiList[$i]['name'] = $row['name'];
			$zapiskiList[$i]['number'] = $row['number'];
			$zapiskiList[$i]['otd'] = $row['otd'];
			$i++;
		}
			return $zapiskiList;
	}


	public static function getZapiskiById($id){
		$id = intval($id);
		if ($id){


		$db = Db::getConnection();
		 

		$result = $db->query('SELECT * FROM `users` WHERE `id` = '. $id);
		

		$result->setFetchMode(PDO::FETCH_ASSOC);

			$item = $result->fetch();
			return $item;
	}
	}
}