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

  <title>RPGenius</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/classes.js"></script>

</head>

<body>

<div class="text-white text-center bg-primary">
  <h1 class="pad-t-20 pad-b-10"> RPGenius </h1>
  <p class="pad-b-20"> An online tool for curating a<br> DnD-lite experience. </p>
</div>

<h2 class="pad-20 text-gray text-center pulsing-text-dark"> Select a Class... </h2>

<!-- Class Selection -->  
<div class="x-scroll-wrapper pad-t-10 pad-b-10 pad-l-5 pad-r-5 mar-r-10">
 
  <!-- Warrior -->
  <a id="rpg-class-warrior" href="weapon-select.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-red rounded">
    <div class="card-header text-center">
      <h5>Warrior</h5>
    </div>
    <div class="card-body pad-10 text-center">
      <p class="card-text text-center">Masters of swords, shields, and axes, Warriors can deal physical damage or protect their allies with their high defense.</p>
    </div>
    <ul class="list-group text-center">
      <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-red">26</span>
        HP
      </li>
      <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-orange">3</span>
        ATT
      </li>
      <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-green">4</span>
        DEF
      </li>
      <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-purple">0</span>
        INT
      </li>
      <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-blue">2</span>
        RES
      </li>
    </ul>
  </div>
  </a>

  <!-- Monk -->
  <a id="rpg-class-monk" href="weapon-select.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-orange rounded">
      <div class="card-header text-center">
        <h5>Monk</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">Advocates of peace yet masters of martial arts, Monks have well-balanced stats and a wide selection of support abilities.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">23</span>
          HP
        </li>
        <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-orange">3</span>
          ATT
        </li>
        <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-green">3</span>
          DEF
        </li>
        <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-purple">3</span>
          INT
        </li>
        <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-blue">3</span>
          RES
        </li>
      </ul>
  </div>
  </a>

  <!-- Cleric -->
  <a id="rpg-class-cleric" href="weapon-select.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-yellow rounded">
      <div class="card-header text-center">
        <h5>Cleric</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">With the power to heal, enhance, or revive your allies with potent light abilities, the Cleric is the ultimate support class.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-yellow" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">24</span>
          HP
        </li>
        <li class="list-group-item align-items-center bg-yellow" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-orange">2</span>
          ATT
        </li>
        <li class="list-group-item align-items-center bg-yellow" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-green">2</span>
          DEF
        </li>
        <li class="list-group-item align-items-center bg-yellow" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-purple">3</span>
          INT
        </li>
        <li class="list-group-item align-items-center bg-yellow" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-blue">4</span>
          RES
        </li>
      </ul>
  </div>
  </a>

  <!-- Archer -->
  <a id="rpg-class-archer" href="weapon-select.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-green rounded">
      <div class="card-header text-center">
        <h5>Archer</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">Attack from afar with the Archer. Deal high damage, pierce enemy defenses, or use your connection with nature to support your allies.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-green" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">25</span>
          HP
        </li>
        <li class="list-group-item align-items-center bg-green" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-orange">5</span>
          ATT
        </li>
        <li class="list-group-item align-items-center bg-green" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-green">1</span>
          DEF
        </li>
        <li class="list-group-item align-items-center bg-green" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-purple">2</span>
          INT
        </li>
        <li class="list-group-item align-items-center bg-green" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-blue">2</span>
          RES
        </li>
      </ul>
  </div>
  </a>

  <!-- Mage -->
  <a id="rpg-class-mage" href="weapon-select.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-blue rounded">
      <div class="card-header text-center">
        <h5>Mage</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">Knowledge of the natural laws allows you to use incredible elemental abilities with the power of ice, fire, and lightning.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-blue" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">26</span>
          HP
        </li>
        <li class="list-group-item align-items-center bg-blue" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-orange">0</span>
          ATT
        </li>
        <li class="list-group-item align-items-center bg-blue" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-green">0</span>
          DEF
        </li>
        <li class="list-group-item align-items-center bg-blue" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-purple">6</span>
          INT
        </li>
        <li class="list-group-item align-items-center bg-blue" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-blue">3</span>
          RES
        </li>
      </ul>
  </div>
  </a>

  <!-- Rune Master -->
  <a id="rpg-class-runemaster" href="weapon-select.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-purple rounded">
      <div class="card-header text-center">
        <h5>Rune Master</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">Combine elements with runestones, balance light and darkness, or wield deadly runeblades as a Rune Master.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-purple" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">24</span>
          HP
        </li>
        <li class="list-group-item align-items-center bg-purple" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-orange">3</span>
          ATT
        </li>
        <li class="list-group-item align-items-center bg-purple" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-green">2</span>
          DEF
        </li>
        <li class="list-group-item align-items-center bg-purple" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-purple">4</span>
          INT
        </li>
        <li class="list-group-item align-items-center bg-purple" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-blue">2</span>
          RES
        </li>
      </ul>
  </div>
  </a>

  <!-- Rogue -->
  <a id="rpg-class-rogue" href="weapon-select.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-gray rounded">
      <div class="card-header text-center">
        <h5>Rogue</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">As deadly thieves and assassins, Rogues can become one with the shadows, dealing high damage with daggers, shuriken, or sai.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">26</span>
          HP
        </li>
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-orange">6</span>
          ATT
        </li>
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-green">2</span>
          DEF
        </li>
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-purple">0</span>
          INT
        </li>
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-blue">1</span>
          RES
        </li>
      </ul>
  </div>
  </a>

</div><!-- /Class Selection -->

<script> 
// --- Initialize Player Object ---
var player = {
  name: undefined,
  level: 0,
  exp: 0,
  class: undefined,
  weapon: undefined,
  hp: undefined,
  att: undefined,
  def: undefined,
  int: undefined,
  res: undefined,
  basic: undefined,
  special: undefined,
  support: undefined,
  attack: undefined,
  ultimate: undefined
}

var skills = {
  hp: 0,
  att: 0,
  def: 0,
  int: 0,
  res: 0,
  mana: 1,
  support: undefined,
  attack: undefined,
  ultimate: undefined
}

localStorage.setItem('objPlayer', JSON.stringify(player));
localStorage.setItem('objSkills', JSON.stringify(skills));

$(document).ready(function(){

  $("#rpg-class-warrior").click(function(){
    var rpgclass = new rpgClass("Warrior", 26, 3, 4, 0, 2);
    setRpgClassObj();
  });

  $("#rpg-class-monk").click(function(){
    var rpgclass = new rpgClass("Monk", 23, 3, 3, 3, 3);
    localStorage.setItem('objRpgclass', JSON.stringify(rpgclass));
  });

  $("#rpg-class-cleric").click(function(){
    var rpgclass = new rpgClass("Cleric", 24, 2, 2, 3, 4);
    localStorage.setItem('objRpgclass', JSON.stringify(rpgclass));
  });

  $("#rpg-class-archer").click(function(){
    var rpgclass = new rpgClass("Archer", 25, 5, 1, 2, 2);
    localStorage.setItem('objRpgclass', JSON.stringify(rpgclass));
  });

  $("#rpg-class-mage").click(function(){
    var rpgclass = new rpgClass("Mage", 26, 0, 0, 6, 3);
    localStorage.setItem('objRpgclass', JSON.stringify(rpgclass));
  });

  $("#rpg-class-runemaster").click(function(){
    var rpgclass = new rpgClass("Rune Master", 24, 3, 2, 4, 2);
    localStorage.setItem('objRpgclass', JSON.stringify(rpgclass));
  });

  $("#rpg-class-rogue").click(function(){
    var rpgclass = new rpgClass("Rogue", 26, 6, 2, 0, 1);
    localStorage.setItem('objRpgclass', JSON.stringify(rpgclass));
  });

});

const setRpgClassObj = () => { 
  localStorage.setItem('objRpgclass', JSON.stringify(rpgclass)); 
}


</script>

<footer class="footer mt-auto text-center bg-lightgray">
  <div class="container pad-20">
    <div class="pad-b-20">
      <a class="btn btn-dark text-white mar-r-10 mar-l-10" href="rulebook.php" role="button">Rulebook</a>
    </div>
    <span class="text-muted">&copy;RPGenius 2019. All Rights Reserved.</span>
  </div>
</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
