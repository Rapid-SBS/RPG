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
  <link rel="stylesheet" type="text/css" href="loading-bar/loading-bar.css"/>
  <script type="text/javascript" src="loading-bar/loading-bar.js"></script>
  <script type="text/javascript" src="js/classes.js"></script>

  <style> .ldBar-label { display: none; }</style>

</head>

<body>
	
<div class="text-white text-center bg-primary">
  <h5 class="pad-10"> Character Sheet </h5>
</div>

<div class="row pad-t-20">
  <h5 class="pad-10 mx-auto text-center" style>Basic Info</h5>
</div><!-- /.row -->

<div id="app-player">
  <div class="row">
    <table class="wide-275 text-center table table-bordered mx-auto">
      <tbody>
        <tr>
          <td>Name</td>
          <td>{{ p.name }}</td>
        </tr>
        <tr>
          <td>Level</td>
          <td>{{ p.level }}</td>
        </tr>
        <tr>
          <td>Class</td>
          <td>{{ p.class }}</td>
        </tr>
        <tr>
          <td>Weapon</td>
          <td>{{ p.weapon.name }}</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="row">
    <h5 class="pad-10 mx-auto text-center" style>Combat Stats</h5>
  </div><!-- /.row -->
  <div class="row">
    <table class="wide-275 text-center table table-bordered mx-auto">
      <tbody>
        <tr>
          <td>HP</td>
          <td>{{ p.hp }}</td>
        </tr>
        <tr>
          <td>ATT</td>
          <td>{{ p.att }}</td>
        </tr>
        <tr>
          <td>DEF</td>
          <td>{{ p.def }}</td>
        </tr>
        <tr>
          <td>INT</td>
          <td>{{ p.int }}</td>
        </tr>
        <tr>
          <td>RES</td>
          <td>{{ p.res }}</td>
        </tr>
        <tr>
          <td>Mana Regen</td>
          <td>{{ p.mana }}</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.row -->

  <div class="row">
    <h5 class="pad-10 mx-auto text-center" style>Abilities</h5>
  </div><!-- /.row -->
  <div class="row pad-b-20">
    <table class="wide-275 text-center table table-bordered mx-auto">
      <tbody>
        <tr>
          <td>Basic</td>
          <td class="font-weight-bold text-red">{{ p.basic }}</td>
        </tr>
        <tr>
          <td>Special</td>
          <td class="font-weight-bold text-yellow">{{ p.special }}</td>
        </tr>
        <tr>
          <td>Support</td>
          <td class="font-weight-bold text-green">{{ p.support }}</td>
        </tr>
        <tr>
          <td>Attack</td>
          <td class="font-weight-bold text-blue">{{ p.attack }}</td>
        </tr>
        <tr>
          <td>Ultimate</td>
          <td class="font-weight-bold text-purple">{{ p.ultimate }}</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.row -->
</div><!-- /#app-player -->

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));
var skills = JSON.parse(localStorage.getItem('objSkills'));
var rpgclass = JSON.parse(localStorage.getItem('objRpgclass'));

  $(document).ready(function(){

  	player.class = rpgclass.name;

  	player.hp = skills.hp + rpgclass.hp;
  	player.att = skills.att + rpgclass.att;
  	player.def = skills.def + rpgclass.def;
  	player.int = skills.int + rpgclass.int;
  	player.res = skills.res + rpgclass.res;
    player.mana = skills.mana;

    player.support = skills.support; 
    player.attack = skills.attack;
    player.ultimate = skills.ultimate;

    // --- Copy player data to be interpolated ---
    let pdata = player;
    var playerapp = new Vue({
      el: '#app-player',
      data: { p: pdata }
    })
  });

// ===== Experience Bar + Add Exp =====
$(document).ready(function(){ 
  // --- Initialize Variables
  let currentExp = player.exp;
  let levelExp = player.level * 20 + 100;
  let progressExp = (currentExp / levelExp) * 100;
  
  // --- Initialize Progress Bar
  var expBar = new ldBar("#exp-bar");

  // --- Display updated values
  expBar.set(progressExp);
  $("#current-exp").text("Exp: " + currentExp);
  });

</script>

<footer class="footer mt-auto text-center bg-lightgray">
  <div class="container pad-20">
    <div class="pad-b-20">
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
