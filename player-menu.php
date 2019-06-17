<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>

  <title>RPGenerator</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div class="text-white text-center bg-primary">
  <h5 class="pad-10"> Player Menu </h5>
</div>

<div class="container">

  <div class="row">
    <div class="wide-275 mx-auto text-center">
       <a class="btn btn-primary text-white mar-10" href="" role="button">View Character Sheet</a>
    </div>
  </div><!-- /.row -->
  <div class="row">
    <div class="wide-275 mx-auto text-center">
       <a class="btn btn-primary text-white mar-10" href="" role="button">Reset Character</a>
    </div>
  </div><!-- /.row -->
  
</div><!-- /.container -->

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));
var skills = JSON.parse(localStorage.getItem('objSkills'));
var rpgclass = JSON.parse(localStorage.getItem('objRpgclass'));
var weapon = JSON.parse(localStorage.getItem('objWeapon'));

  $(document).ready(function(){

  });

</script>

<footer class="footer mt-auto text-center bg-lightgray">
  <div class="container pad-20">
    <div class="pad-b-20">
      <a class="btn btn-dark text-white mar-r-10 mar-l-10" href="http://rapid-phyre.net" role="button">Restart</a>
      <button class="btn btn-dark text-white mar-r-10 mar-l-10" onclick="goBack()" role="button">Return</button>
    </div>
    <span class="text-muted">&copy;RPGenius 2019. All Rights Reserved.</span>
  </div>

  <script>
    function goBack() {
      window.history.back();
    }
  </script>

</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>

</html>
