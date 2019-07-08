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
  <h5 class="pad-10"> Character Name </h5>
</div>

<div class="container">

  <div class="row pad-t-40">
    <div class="col">
      <p class="mx-auto text-center max-wide-380">You are a <span id="rpg-class"></span><span id="rpg-weapon" class="text-lowercase"></span>.</p>
      <p class="mx-auto text-center">What is your name?</p>
    </div>
  </div><!-- /.row -->

  <form>
    <div class="form-row pad-b-20">
      <div class="wide-275 mx-auto text-center">
        <input type="text" maxlength="30" class="form-control pad-10" id="inputName" aria-describedby="playerName" placeholder="Enter a name..." required>
        <button id="save-name" type="submit" class="btn btn-primary mar-t-20">Save</button>
      </div>
    </div><!-- /.form-row -->
  </form>

</div><!-- /.container -->

<div id="name-saved" class="text-white text-center pad-10 bg-lightgreen" style="display: none;">
  <h5 class="pad-10">Name Saved!</h5>
</div>

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));
var skills = JSON.parse(localStorage.getItem('objSkills'));
var rpgclass = JSON.parse(localStorage.getItem('objRpgclass'));

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
    } else if (rpgclass.name === "Rune Master") {
      $("#rpg-class").text("powerful " + rpgclass.name);
    }else {
      $("#weapon-select").html("<h2>No Class Selected </h2>");
    } 
  });

  $(document).ready(function(){ // ----- Display Weapon -----
    if (player.weapon === "Battle Axe") {
      $("#rpg-weapon").text(", charging into battle and shattering enemy defenses with your battle axe");
    } else if (player.weapon === "War Hammer") {
      $("#rpg-weapon").text(", charging into battle and battering enemies with your mighty war hammmer");
    } else if (player.weapon === "Bow") {
      $("#rpg-weapon").text(", bombarding enemies with arrows from your bow");
    } else if (player.weapon === "Crossbow") {
      $("#rpg-weapon").text(", piercing enemy defenses with your crossbow");
    } else if (player.weapon === "Longbow") {
      $("#rpg-weapon").text(", supporting allies with your nature abilities and attacking with your longbow");
    } else if (player.weapon === "Sword & Shield") {
      $("#rpg-weapon").text(", defending your allies with your sword and shield as the ultimate protector");
    } else if (player.weapon === "Mace & Shield") {
      $("#rpg-weapon").text(", weilding powerful light abilities and protecting allies with your mace and shield");
    } else if (player.weapon === "Quarterstaff" || player.weapon === "Holy Tome") {
      $("#rpg-weapon").text(", supporting your allies with your light abilities and " + player.weapon);
    } else if (player.weapon === "Ice Stone" || player.weapon === "Fire Stone" || player.weapon === "Lightning Stone") {
      $("#rpg-weapon").text(", harnessing the power of the elements with your " + player.weapon);
    } else if (player.weapon === "Bo Staff") {
      $("#rpg-weapon").text(" and a master of the bo staff");
    } else if (player.weapon === "Brawler's Fist") {
      $("#rpg-weapon").text(", a master of martial arts and chi manipulation" );
    } else if (player.weapon === "Wind Fu") {
      $("#rpg-weapon").text(", mixing martial arts with the power of the wind element");
    } else if (player.weapon === "Shuriken") {
      $("#rpg-weapon").text(", the ultimate assassin with your shuriken and shadow clones");
    } else if (player.weapon === "Dual Sai") {
      $("#rpg-weapon").text(", ravaging enemies with your dual sai and shadow abilities");
    } else if (player.weapon === "Dagger") {
      $("#rpg-weapon").text(", wreaking havoc with your dagger and alchemical potions");
    } else if (player.weapon === "Runeblade") {
      $("#rpg-weapon").text(", channeling the elements through your runeblade with the might of a warrior and the powers of a mage");
    } else if (player.weapon === "Runestone") {
      $("#rpg-weapon").text(", wielding and combining multiple elements with your collection of runestones");
    } else if (player.weapon === "Aether Stone") {
      $("#rpg-weapon").text(", one of the only known people to wield both light and dark elements");
    } else {
      $("#rpg-weapon").text("who wields a " + player.weapon);
    }
  });

  $(document).ready(function(){ // ----- Save Name -----
    $("#save-name").click(function(){
      event.preventDefault()
      var playerName = document.getElementById('inputName').value
      player.name = playerName;
      localStorage.setItem('objPlayer', JSON.stringify(player));
      $('#name-saved').fadeIn('slow', function(){
        $('#name-saved').delay(3000).fadeOut();
        }
       )
    });
  });
</script>

<footer class="footer mt-auto text-center bg-lightgray">
  <div class="container pad-20">
    <div class="pad-b-20">
      <button class="btn btn-dark text-white mar-r-10 mar-l-10" onclick="goBack()" role="button">Return</button>
      <a class="btn btn-blue text-white mar-r-10 mar-l-10" href="player-menu.php" role="button">Continue</a>
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
