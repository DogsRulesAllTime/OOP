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

	public static function getLast(){
		$db = Db::getConnection();
		$zapiskiList = array();

		$result = $db->query("SELECT * FROM `zapiski` WHERE `id_otprav` = {$_SESSION['id']} ORDER BY `zapiski`.`data_sozdania` DESC LIMIT 5  ");

		$i=0;
		while ($row = $result->fetch()) {

			$zapiskiList[$i]['id'] = $row['id'];
			$zapiskiList[$i]['tema'] = $row['tema'];
			$zapiskiList[$i]['text'] = $row['text'];
			$zapiskiList[$i]['status'] = $row['status'];
			$zapiskiList[$i]['data_sozdania'] = $row['data_sozdania'];
			$zapiskiList[$i]['data_end'] = $row['data_end'];
			$zapiskiList[$i]['id_otprav '] = $row['id_otprav'];
			$zapiskiList[$i]['specialist '] = $row['specialist'];
			$i++;
		}
			return $zapiskiList;
	}

public static function zapiskaAdd()
    {

        $db = Db::getConnection();
        // print_r($_FILES['myfile']);
             if (isset($_POST['send']) ) {
        	// unset($_FILES['myfile']);
            if (empty($_POST['theme'])):
                echo 'select the theme';
            else: if (empty($_POST['comment'])):
                echo 'enter the text';
            else: if (!is_uploaded_file($_FILES['myfile']['tmp_name'])):
                echo 'choose file';
                else:
                	
                	
            //     $query = "INSERT INTO `workers` (`id_user`, `name`, `surname`, `prof`, `photo`) VALUES (NULL, '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['selectprof']}', '3')";
            // echo $query; die();
                 // print_r($_FILES['myfile']);
                 // die();
                //    print_r ($_FILES['myfile']['error']);
                //    if (is_uploaded_file($_FILES['myfile']['tmp_name'])) {
                //     echo "Файл ". $_FILES['myfile']['name'] ." успешно загружен.\n";
                // }
// die();
              if ( isset($_FILES['myfile'])):{
                   echo "da"; 
              
                    
                  $uploaddir = 'template/img/';
                $uploadfile = $uploaddir .$_SESSION['surname'].date('d-m-y-g-i').'.'. basename($_FILES['myfile']['type']);
//                echo '<pre>';
//                  var_dump($_SESSION);
//   echo $uploadfile;
//   die();
                if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
                    echo "Файл корректен и был успешно загружен.\n";
//  "INSERT INTO `zapiski` (`id`, `tema`, `text`, `status`, `data_sozdania`, `data_end`, `id_otprav`, `specialist`, `img`) VALUES (NULL, '{$_POST['theme']}', '{$_POST['comment']}', '0', CURRENT_TIMESTAMP, '', '{$_SESSION['id']}', '' , '$uploadfile')";
//                echo $q;
                } else {
                    echo "Возможная атака с помощью файловой загрузки!\n";
                }
                }
                // die();
                  $db->query("INSERT INTO `zapiski` (`id`, `tema`, `text`, `status`, `data_sozdania`, `data_end`, `id_otprav`, `specialist`, `img`) VALUES (NULL, '{$_POST['theme']}', '{$_POST['comment']}', '0', CURRENT_TIMESTAMP, '', '{$_SESSION['id']}', '' , '$uploadfile')");


            //!!!!!!!!!!!!!!!!!!! Сообщение об успехе на js и редирект на главную страницу
//                    header('location: /upanel');
                  ?>
                  <script>
                      alert( "Заявка успешно создана!\nСечас вы будете перенаправлены на главную страницу.");
                      location.href='/upanel';

                  </script>
                  <?php
            endif;
            endif;
            endif;
			endif;
			 }

}
}


