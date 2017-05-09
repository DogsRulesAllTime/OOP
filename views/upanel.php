<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
 <!--    <link rel="stylesheet" href="template/css/bootstrap.css"> -->
    <link rel="stylesheet" href="template/css/style.css">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
   <!--  <script src="template/js/bootstrap.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once (ROOT . '/views/uheader.php'); ?>
  
  <div class="row">
<div class="container col-lg-6">
<h3 class="text-center">текст инструкция</h3>
<p class="text-center"> тут вы можете просмотреть <a href="/upanel/story">историю своих заявок</a> , по этой ссылке <a href="/upanel/create">создать новую заявку</a>  или просмотреть нашу <a href="/upanel/knowledge">базу знаний здесь</a>, возможно там вы сможете найти ответ на свою проблему.</p>
</div>



  <div class="container col-lg-6">
    <h3 class="text-center">Последние 5 записок</h3>
  <hr>
    <table class="table">
    <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($last as $key => $value): ?>
        
    <tr>
      <th scope="row"><?php echo $value['status']; ?></th>
      <td><?php echo $value['id']; ?></td>
      <td><?php echo $value['tema '];?></td>
      <td><?php echo $value['specialist ']; ?></td>
    </tr>
       <?php endforeach; ?>
  </tbody>
</table>
  </div>
 
</div>
</body>
</html>