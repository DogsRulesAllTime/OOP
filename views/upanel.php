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
  <br>
  <div class="row">
<div class="container col-lg-6">
<div class="card" style="width: 50rem;">
  <div class="card-block ">
    <h4 class="card-title text-center">текст инструкция</h4>
    <p class="card-text">тут вы можете просмотреть <a href="/upanel/story">историю своих заявок</a> , по этой ссылке <a href="/upanel/create">создать новую заявку</a>  или просмотреть нашу <a href="/upanel/knowledge">базу знаний здесь</a>, возможно там вы сможете найти ответ на свою проблему.</p>
    <a href="#" class="btn btn-primary ">Go somewhere</a>
  </div>
</div>
</div>



  <div class="container col-lg-5">
    <h3 class="text-center">Последние 5 записок</h3>
  <hr>
    <table class="table">
    <thead>
    <tr>
      <th>#</th>
      <th>Тема</th>
      <th>Дата создания</th>
      <th>Статус</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($last as $key => $value): ?>
        
    <tr>
      <th scope="row"><?php echo $value['id'];?></th>
      <td><?php echo $value['tema'];?></td>
      <td><?php echo date( "d-m-y" , strtotime($value['data_sozdania']));?></td>
      <td><?php echo $value['status']; ?></td>
    </tr>
       <?php endforeach; ?>
  </tbody>
</table>
  </div>

</div>
<script>
    $('#exit').click(function() {

        $.ajax({
            url: "components/exit.php",
            data: exit()
        })

    });
</script>
</body>
</html>