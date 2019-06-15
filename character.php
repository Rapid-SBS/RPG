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

  console.log("name: " + player.name);
	/*
var rpgPlayerName = localStorage.getItem('rpgPlayerName');
var rpgPlayerLevel = localStorage.getItem('rpgPlayerLevel');
var rpgPlayerClass = localStorage.getItem('rpgPlayerClass');
var rpgPlayerWeapon = localStorage.getItem('rpgPlayerWeapon');

  var rpgPlayerClassHP = localStorage.getItem('rpgPlayerClassHP');
  var rpgPlayerClassATT = localStorage.getItem('rpgPlayerClassATT');
  var rpgPlayerClassDEF = localStorage.getItem('rpgPlayerClassDEF');
  var rpgPlayerClassINT = localStorage.getItem('rpgPlayerClassINT');
  var rpgPlayerClassRES = localStorage.getItem('rpgPlayerClassRES');

  var rpgPlayerSkillHP = localStorage.getItem('rpgPlayerSkillHP');
  var rpgPlayerSkillATT = localStorage.getItem('rpgPlayerSkillATT');
  var rpgPlayerSkillDEF = localStorage.getItem('rpgPlayerSkillDEF');
  var rpgPlayerSkillINT = localStorage.getItem('rpgPlayerSkillINT');
  var rpgPlayerSkillRES = localStorage.getItem('rpgPlayerSkillRES');

var rpgPlayerBaseHP = parseInt(rpgPlayerClassHP) + parseInt(rpgPlayerSkillHP);
var rpgPlayerBaseATT = parseInt(rpgPlayerClassATT) + parseInt(rpgPlayerSkillATT);
var rpgPlayerBaseDEF = parseInt(rpgPlayerClassDEF) + parseInt(rpgPlayerSkillDEF);
var rpgPlayerBaseINT = parseInt(rpgPlayerClassINT) + parseInt(rpgPlayerSkillINT);
var rpgPlayerBaseRES = parseInt(rpgPlayerClassRES) + parseInt(rpgPlayerSkillRES);

var rpgPlayerBasicAbility = localStorage.getItem('rpgPlayerBasicAbility');
var rpgPlayerSpecialAbility = localStorage.getItem('rpgPlayerSpecialAbility');
var rpgPlayerSupportAbility = localStorage.getItem('rpgPlayerSupportAbility');
var rpgPlayerAttackAbility = localStorage.getItem('rpgPlayerAttackAbility');
var rpgPlayerUltimateAbility = localStorage.getItem('rpgPlayerUltimateAbility');

  $(document).ready(function(){

    $("#tb-rpg-name").text(rpgPlayerName);
    $("#tb-rpg-level").text(rpgPlayerLevel);
    $("#tb-rpg-class").text(rpgPlayerClass);
    $("#tb-rpg-weapon").text(rpgPlayerWeapon);

    $("#tb-rpg-hp").text(rpgPlayerBaseHP);
    $("#tb-rpg-att").text(rpgPlayerBaseATT);
    $("#tb-rpg-def").text(rpgPlayerBaseDEF);
    $("#tb-rpg-int").text(rpgPlayerBaseINT);
    $("#tb-rpg-res").text(rpgPlayerBaseRES);

    $("#tb-rpg-basic").text(rpgPlayerBasicAbility);
    $("#tb-rpg-special").text(rpgPlayerSpecialAbility);
    $("#tb-rpg-support").text(rpgPlayerSupportAbility);
    $("#tb-rpg-attack").text(rpgPlayerAttackAbility);
    $("#tb-rpg-ultimate").text(rpgPlayerUltimateAbility);

  });

  console.log("Class HP: " + rpgPlayerClassHP);
  console.log("Class ATT: " + rpgPlayerClassATT);
  console.log("Class DEF: " + rpgPlayerClassDEF);
  console.log("Class INT: " + rpgPlayerClassINT);
  console.log("Class RES: " + rpgPlayerClassRES);


  console.log("Skills HP: " + rpgPlayerSkillHP);
  console.log("Skills ATT: " + rpgPlayerSkillATT);
  console.log("Skills DEF: " + rpgPlayerSkillDEF);
  console.log("Skills INT: " + rpgPlayerSkillINT);
  console.log("Skills RES: " + rpgPlayerSkillRES);
*/

</script>


<footer class="footer mt-auto text-center bg-light">
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
