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
  <h5 class="pad-10"> Character Sheet </h5>
</div>

<div class="row pad-t-20">
  <h4 class="pad-10 mx-auto text-center" style>Basic Info</h4>
</div><!-- /.row -->

<div class="row">
  <table class="wide-275 text-center table table-bordered mx-auto">
    <tbody>
      <tr>
        <td>Name</td>
        <td id="tb-rpg-name"> </td>
      </tr>
      <tr>
        <td>Level</td>
        <td id="tb-rpg-level"> </td>
      </tr>
      <tr>
        <td>Class</td>
        <td id="tb-rpg-class"> </td>
      </tr>
      <tr>
        <td>Weapon</td>
        <td id="tb-rpg-weapon"> </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="row">
  <h4 class="pad-10 mx-auto text-center" style>Combat Stats</h4>
</div><!-- /.row -->
<div class="row">
  <table class="wide-275 text-center table table-bordered mx-auto">
    <tbody>
      <tr>
        <td>HP</td>
        <td id="tb-rpg-hp"> </td>
      </tr>
      <tr>
        <td>ATT</td>
        <td id="tb-rpg-att"> </td>
      </tr>
      <tr>
        <td>DEF</td>
        <td id="tb-rpg-def"> </td>
      </tr>
      <tr>
        <td>INT</td>
        <td id="tb-rpg-int"> </td>
      </tr>
      <tr>
        <td>RES</td>
        <td id="tb-rpg-res"> </td>
      </tr>
    </tbody>
  </table>
</div><!-- /.row -->

<div class="row">
  <h4 class="pad-10 mx-auto text-center" style>Abilities</h4>
</div><!-- /.row -->
<div class="row pad-b-20">
  <table class="wide-275 text-center table table-bordered mx-auto">
    <tbody>
      <tr>
        <td>Basic</td>
        <td id="tb-rpg-basic" class="font-weight-bold text-red"> </td>
      </tr>
      <tr>
        <td>Special</td>
        <td id="tb-rpg-special" class="font-weight-bold text-yellow"> </td>
      </tr>
      <tr>
        <td>Support</td>
        <td id="tb-rpg-support" class="font-weight-bold text-green"> </td>
      </tr>
      <tr>
        <td>Attack</td>
        <td id="tb-rpg-attack" class="font-weight-bold text-blue"> </td>
      </tr>
      <tr>
        <td>Ultimate</td>
        <td id="tb-rpg-ultimate" class="font-weight-bold text-purple"> </td>
      </tr>
    </tbody>
  </table>
</div><!-- /.row -->

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));
var skills = JSON.parse(localStorage.getItem('objSkills'));
var rpgclass = JSON.parse(localStorage.getItem('objRpgclass'));
var weapon = JSON.parse(localStorage.getItem('objWeapon'));

  $(document).ready(function(){

  	player.name = "Player";
  	player.level = 0;
  	player.class = rpgclass.name;
  	player.weapon = weapon.name;

  	player.hp = skills.hp + rpgclass.hp;
  	player.att = skills.att + rpgclass.att;
  	player.def = skills.def + rpgclass.def;
  	player.int = skills.int + rpgclass.int;
  	player.res = skills.res + rpgclass.res;

  	player.basic = weapon.basic;
  	player.special = weapon.special;
  	player.support = skills.support;
  	player.attack = skills.attack;
  	player.ultimate = skills.ultimate;

    $("#tb-rpg-name").text(player.name);
    $("#tb-rpg-level").text(player.level);
    $("#tb-rpg-class").text(player.class);
    $("#tb-rpg-weapon").text(player.weapon);

    $("#tb-rpg-hp").text(player.hp);
    $("#tb-rpg-att").text(player.att);
    $("#tb-rpg-def").text(player.def);
    $("#tb-rpg-int").text(player.int);
    $("#tb-rpg-res").text(player.res);

    $("#tb-rpg-basic").text(player.basic);
    $("#tb-rpg-special").text(player.special);
    $("#tb-rpg-support").text(player.support);
    $("#tb-rpg-attack").text(player.attack);
    $("#tb-rpg-ultimate").text(player.ultimate);

      console.log("playerName:" + playerName);
      console.log("player.name:" + player.name);
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
