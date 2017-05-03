<?php
class User
{
	
	

	public static function getList(){
		echo $_SESSION['id'];
		// var_dump ($_SESSION);
		
		$db = Db::getConnection();
		$zapiskiList = array();

		$result = $db->query("SELECT * FROM `zapiski` WHERE `id_otprav` = {$_SESSION['id']} ");

		$i=0;
		while ($row = $result->fetch()) {

			$zapiskiList[$i]['id'] = $row['id'];
			$zapiskiList[$i]['tema '] = $row['tema'];
			$zapiskiList[$i]['text '] = $row['text'];
			$zapiskiList[$i]['status'] = $row['status'];
			$zapiskiList[$i]['data_sozdania'] = $row['data_sozdania'];
			$zapiskiList[$i]['data_end'] = $row['data_end'];
			$zapiskiList[$i]['id_otprav '] = $row['id_otprav'];
			$zapiskiList[$i]['specialist '] = $row['specialist'];
			$i++;
		}
			return $zapiskiList;
	}
}