<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--    <link rel="stylesheet" href="template/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="template/css/style.css"> -->

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
   <!--  <script src="template/js/bootstrap.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once (ROOT . '/views/uheader.php'); ?>
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">В обработке</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Выполняются</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Выполнены</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane  active" id="profile">
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
  	<?php foreach ($zap as $key => $value): 
       	if ($value['status'] == '0'):?>
       	
    <tr>
      <th scope="row"><?php echo $value['status']; ?></th>
      <td><?php echo $value['id']; ?></td>
      <td><?php echo $value['tema '];?></td>
      <td><?php echo $value['specialist ']; ?></td>
    </tr>
       <?php endif;
  		endforeach; ?>
  </tbody>
</table>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="buzz">
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
    <?php foreach ($zap as $key => $value): 
       	if ($value['status'] == '1'):?>
       	
    <tr>
      <th scope="row"><?php echo $value['status']; ?></th>
      <td><?php echo $value['id']; ?></td>
      <td><?php echo $value['tema '];?></td>
      <td><?php echo $value['specialist ']; ?></td>
    </tr>
       <?php endif;
  		endforeach; ?>
  </tbody>
</table>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="references">
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
   <?php foreach ($zap as $key => $value): 
       	if ($value['status'] == '2'):?>
       	
    <tr>
      <th scope="row"><?php echo $value['status']; ?></th>
      <td><?php echo $value['id']; ?></td>
      <td><?php echo $value['tema '];?></td>
      <td><?php echo $value['specialist ']; ?></td>
    </tr>
       <?php endif;
  		endforeach; ?>
  </tbody>
</table>
  </div>
</div>


</body>
</html>