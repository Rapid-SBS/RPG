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
	
<div class="text-white text-center bg-primary">
  <h5 class="pad-10"> Character Name </h5>
</div>

<div class="row pad-40">
  <div class="col">
    <p class="mx-auto text-center">You are a <span id="rpg-class"></span> <span id="rpg-weapon" class="text-lowercase"></span>.</p>
    <p class="mx-auto text-center">What is your name?</p>
  </div>
</div><!-- /.row -->

<form class="pad-20">
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a name...">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));
var skills = JSON.parse(localStorage.getItem('objSkills'));
var rpgclass = JSON.parse(localStorage.getItem('objRpgclass'));
var weapon = JSON.parse(localStorage.getItem('objWeapon'));

  $(document).ready(function(){ // ----- Display Class -----
    if (rpgclass.name === "Warrior") {
      $("#rpg-class").text("strong " + rpgclass.name);
    } else if (rpgclass.name === "Archer") {
      $("#rpg-class").text("skilled " + rpgclass.name);
    } else if (rpgclass.name === "Mage") {
      $("#rpg-class").text("talented " + rpgclass.name);
    } else if (rpgclass.name === "Cleric") {
      $("#rpg-class").text("gifted " + rpgclass.name);
    } else if (rpgclass.name === "Rogue") {
      $("#rpg-class").text("deadly " + rpgclass.name);
    } else if (rpgclass.name === "Monk") {
      $("#rpg-class").text("wise " + rpgclass.name);
    } else {
      $("#weapon-select").html("<h2>No Class Selected </h2>");
    } 
  });

  $(document).ready(function(){ // ----- Display Weapon -----
    if (weapon.name === "Battle Axe" || weapon.name === "War Hammer") {
      $("#rpg-weapon").text(", wielding a fearsome " + weapon.name);
    } else if (weapon.name === "Bow" || weapon.name === "Crossbow" || weapon.name === "Longbow") {
      $("#rpg-weapon").text(", attacking from afar with your " + weapon.name);
    } else if (weapon.name === "Sword & Shield" || weapon.name === "Mace & Shield") {
      $("#rpg-weapon").text(", defending your allies with your " + weapon.name);
    } else if (weapon.name === "Quarterstaff" || weapon.name === "Holy Tome") {
      $("#rpg-weapon").text(", supporting your allies with your " + weapon.name);
    } else if (weapon.name === "Ice Stone" || weapon.name === "Fire Stone" || weapon.name === "Lightning Stone") {
      $("#rpg-weapon").text(", harnessing the power of the elements with your " + weapon.name);
    } else if (weapon.name === "Bo Staff") {
      $("#rpg-weapon").text("and a master of the " + weapon.name);
    } else if (weapon.name === "Brawler's Fist") {
      $("#rpg-weapon").text(", a master of martial arts and chi manipulation" + weapon.name);
    } else if (weapon.name === "Wind Fu") {
      $("#rpg-weapon").text(", mixing martial arts with the wind element" + weapon.name);
    } else if (weapon.name === "Shuriken") {
      $("#rpg-weapon").text(", the ultimate assassin with your shuriken and shadow clones");
    } else if (weapon.name === "Dual Sai") {
      $("#rpg-weapon").text(", ravaging enemies with your dual sai and shadow abilities");
    } else if (weapon.name === "Dagger") {
      $("#rpg-weapon").text(", wreaking havoc with your dagger and alchemical potions");
    } else {
      $("#rpg-weapon").text("who wields a " + weapon.name);
    }
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
