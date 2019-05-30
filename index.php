<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

  <title>RPGenius</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div class="text-white text-center bg-primary">
  <h1 class="pad-t-20 pad-b-10"> RPGenius </h1>
  <p class="pad-b-20"> An online tool for curating a<br> DnD-lite experience. </p>
</div>

<h2 class="pad-20 text-gray text-center opacity-pulse"> Select a Class... </h2>

<!-- Class Selection -->  
<div class="x-scroll-wrapper pad-t-10 pad-b-10 pad-l-5 pad-r-5 mar-r-10">
 
  <!-- Warrior -->
  <a href="weapons-warrior.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-orange rounded">
    <div class="card-header text-center">
      <h5>Warrior</h5>
    </div>
    <div class="card-body pad-10 text-center">
      <p class="card-text text-center">Masters of swords, shields, and axes, Warriors can deal physical damage or protect their allies with their high defense.</p>
    </div>
    <ul class="list-group text-center">
      <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-red">18</span>
        HP
      </li>
      <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-orange">3</span>
        ATT
      </li>
      <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-green">4</span>
        DEF
      </li>
      <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-purple">1</span>
        INT
      </li>
      <li class="list-group-item align-items-center bg-orange" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-blue">2</span>
        RES
      </li>
    </ul>
  </div>
  </a>

  <!-- Archer -->
  <a href="weapons-archer.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-green rounded">
      <div class="card-header text-center">
        <h5>Archer</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">Deal damage from a distance with the Archer. Equip a crossbow to pierce defenses or a longbow for increased critical chance.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-green" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">16</span>
          HP
        </li>
        <li class="list-group-item align-items-center bg-green" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-orange">4</span>
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
  <a href="weapons-mage.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-blue rounded">
      <div class="card-header text-center">
        <h5>Mage</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">Specialize in ice, fire, or lightning abilities with the Mage. Critical Hits apply debuffs instead of bonus damage.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-blue" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">14</span>
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
          <span class="badge badge-light text-purple">5</span>
          INT
        </li>
        <li class="list-group-item align-items-center bg-blue" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-blue">3</span>
          RES
        </li>
      </ul>
  </div>
  </a>

  <!-- Cleric -->
  <a href="weapons-cleric.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-yellow rounded">
      <div class="card-header text-center">
        <h5>Cleric</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">With the power to heal, enhance, or resurrect your allies with potent light magic, the Cleric is the ultimate support class.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-yellow" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">15</span>
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

  <!-- Rogue -->
  <a href="weapons-rogue.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-gray rounded">
      <div class="card-header text-center">
        <h5>Rogue</h5>
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">As deadly thieves and assassins, Rogues can attack using daggers or throwing knives with high critical attack rate.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">14</span>
          HP
        </li>
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-orange">3</span>
          ATT
        </li>
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-green">1</span>
          DEF
        </li>
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-purple">3</span>
          INT
        </li>
        <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-blue">1</span>
          RES
        </li>
      </ul>
  </div>
  </a>

  <!-- Monk -->
  <a href="weapons-monk.php" class="card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white bg-red rounded">
      <div class="card-header text-center">
        <h5>Monk</h5><img src="img/icon-monk.svg" />
      </div>
      <div class="card-body pad-10 text-center">
        <p class="card-text text-center">Advocates of peace yet masters of combat, Monks have well-balanced stats and a wide selection of support abilities.</p>
      </div>
      <ul class="list-group text-center">
        <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">17</span>
          HP
        </li>
        <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-orange">3</span>
          ATT
        </li>
        <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-green">3</span>
          DEF
        </li>
        <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-purple">3</span>
          INT
        </li>
        <li class="list-group-item align-items-center bg-red" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-blue">3</span>
          RES
        </li>
      </ul>
  </div>
  </a>

</div><!-- /card-deck -->
<!-- /Class Selection -->



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>

</html>
