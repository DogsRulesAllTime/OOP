<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <link rel="stylesheet" href="/template/css/bootstrap.css">
</head>
<body>
   <form action="" method="POST">
  <input type="submit" value= "Выход" name="">
</form>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
   <div class="row">
     
       <div class="col-sm-4 text-center">
       <a href="panel.php?st=0" class="btn btn-info <?php echo $new; ?>" role="button">Новые заявки</a>
       </div>
       <div class="col-sm-4 text-center">
       <a href="panel.php?st=1" class="btn btn-info <?php echo $inWork; ?>" role="button">В процессе</a>
       </div>
       <div class="col-sm-4 text-center">
       <a href="panel.php?st=2" class="btn btn-info <?php echo $done; ?>" role="button">Выполненые</a>
       </div>
   </div>
  </div>
</nav>
   
    <table class="table table-striped">
  <thead class="thead-inverse">
    <tr>
      <th>№ заявки</th>
      <th>Отдел</th>
      <th>Дата создания</th>
      <th>Тема</th>
      <th></th>
    </tr>
  </thead>
   <tbody>
    <?php
          //Одна строка с информацией
        foreach($zapiskiList as $a):?>
        
          
     <tr>
      <th scope="row"><?php echo $a['id']?></th>
      <td><?php echo $a['name']?></td>
      <td><?php echo $a['number']?></td>
      <td><?php echo $a['otd']?></td>
      <td><a href="apanel/<?php echo $a['id']?>">Подробнее</a></td>
    </tr>
      <?php endforeach; ?>
    </table>
</body>
</html>