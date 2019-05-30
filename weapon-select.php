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

  <title>RPGenerator</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div class="y-flex-container pad-10">

<div id="weapon-select"></div>

  <script>
  $(document).ready(function(){

  var rpgClass = localStorage.getItem('rpgClass');
  console.log("Class: " + rpgClass);

  if (rpgClass === "Warrior") {

    $("#weapon-select").html("<?php include 'weapons/weapons-warrior.php'; ?>");
    
  } else if (rpgClass === "Archer") {

    $("#weapon-select").html("<?php include 'weapons/weapons-archer.php'; ?>");

  } else if (rpgClass === "Mage") {

    $("#weapon-select").html("<?php include 'weapons/weapons-mage.php'; ?>");
    
  } else if (rpgClass === "Cleric") {

    $("#weapon-select").html("<?php include 'weapons/weapons-cleric.php'; ?>");
    
  } else if (rpgClass === "Rogue") {

    $("#weapon-select").html("<?php include 'weapons/weapons-rogue.php'; ?>");
    
  } else if (rpgClass === "Monk") {

    $("#weapon-select").html("<?php include 'weapons/weapons-monk.php'; ?>");
    
  } else {

    $("#weapon-select").html("<h2>No Class Selected </h2>");
  
  }
  }
</script>

</div><!-- /.y-flex-container -->

<footer class="footer mt-auto text-center bg-light">
  <div class="container pad-20">
    <span class="text-muted">&copy;RPGenius 2019. All Rights Reserved.</span>
  </div>
</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>

</html>
