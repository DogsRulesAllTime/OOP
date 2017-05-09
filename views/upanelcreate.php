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

<form class="well form-horizontal" action="panel.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Заполните поля!</legend>



<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Тема</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Выберите тему</option>
      <option>Установить ПО</option>
      <option>Принтер/сканер</option>
      <option>Графика</option>
      <option>Плоттерная</option>
      </select>
  </div>
</div>
</div>




<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Текст</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <textarea class="form-control" name="comment" placeholder="Суть заявки"></textarea>
  </div>
  </div>
</div>
<!-- IMG -->
<div class="form-group">
               <!-- <input type="hidden" name="MAX_FILE_SIZE" value="3000000000000" /> -->
               <div class="input-group">
                <input id="upload"  multiple="" name="myfile" type="file" ><br>
                 </div>
                 <br>
                <div id="preview" ></div>
               
<style>
    #preview img {
    width: 100px;
      height: 100px;
    }
  </style>

            </div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-6 control-label"></label>
  <div class="col-md-6">
    <button type="submit" name="send" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>





<!-- IMG PREVieW -->
 
  <script>
    (function() {
      var inpElem = document.getElementById('upload'),
          divElem = document.getElementById('preview');
           inpElem.addEventListener("change", function(e) {
          preview(this.files[0]);
      });      
      function preview(file) {
        if ( file.type.match(/image.*/) ) {
          var reader = new FileReader(), img;
           
          reader.addEventListener("load", function(event) {
            img = document.createElement('img');
            img.src = event.target.result;
            divElem.appendChild(img);
          });
         reader.readAsDataURL(file);
        }     }
    })();
  </script>

</body>
</html>
