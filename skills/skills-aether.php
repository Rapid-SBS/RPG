  <div id="rpg-skills-lvl-10" class="border-top pad-20 overlay" style="width: 100%;">

    <div class="row pad-10"><h5 class="mx-auto">LEVEL 10</h5></div>
    <?php include 'passives/attack2.php'; ?>

  </div><!-- / Level 10 -->

  <div id="rpg-skills-lvl-9" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 9</h5></div>
    <?php include 'passives/mana2.php'; ?>

  </div><!-- / Level 9 -->

  <div id="rpg-skills-lvl-8" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 8</h5></div>
    <?php include 'ultimates/aether.php'; ?>

  </div><!-- / Level 8 -->

  <div id="rpg-skills-lvl-7" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 7</h5></div>
    <?php include 'passives/defense2.php'; ?>

  </div><!-- / Level 7 -->

  <div id="rpg-skills-lvl-6" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 6</h5></div>
    <?php include 'passives/attack1.php'; ?>

  </div><!-- / Level 6 -->

  <div id="rpg-skills-lvl-5" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 5</h5></div>
    <?php include 'attacks/aether.php'; ?>

  </div><!-- / Level 5 -->

  <div id="rpg-skills-lvl-4" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 4</h5></div>
    <?php include 'passives/mana1.php'; ?>

  </div><!-- / Level 4 -->

  <div id="rpg-skills-lvl-3" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 3</h5></div>
    <?php include 'passives/defense1.php'; ?>

  </div><!-- / Level 3 -->

  <div id="rpg-skills-lvl-2" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 2</h5></div>
    <?php include 'supports/aether.php'; ?>

  </div><!-- / Level 2 -->

  <div id="rpg-skills-lvl-1" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 1</h5></div>
    <?php include 'passives/vitality.php'; ?>

  <script>
  var player = JSON.parse(localStorage.getItem('objPlayer'));

  new Vue({ el: '#attack-select',
  data: { attackSelection: '' } })

  new Vue({ el: '#support-select',
  data: { supportSelection: '' } })

  new Vue({ el: '#ultimate-select',
  data: { ultimateSelection: '' } })


    $(document).ready(function(){
      console.log(player.level);
      if (player.level <= 10) { 
        $("#rpg-skills-lvl-10 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-10").addClass("overlay"); 
      }
      if (player.level <= 9) { 
        $("#rpg-skills-lvl-9 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-9").addClass("overlay"); 
      }
      if (player.level <= 8) { 
        $("#rpg-skills-lvl-8 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-8").addClass("overlay"); 
      }
      if (player.level <= 7) { 
        $("#rpg-skills-lvl-7 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-7").addClass("overlay"); 
      }
      if (player.level <= 6) { 
        $("#rpg-skills-lvl-6 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-6").addClass("overlay"); 
      }
      if (player.level <= 5) { 
        $("#rpg-skills-lvl-5 > div > label.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-5").addClass("overlay"); 
      }
      if (player.level <= 4) { 
        $("#rpg-skills-lvl-4 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-4").addClass("overlay"); 
      }
      if (player.level <= 3) { 
        $("#rpg-skills-lvl-3 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-3").addClass("overlay"); 
      }
      if (player.level <= 2) { 
        $("#rpg-skills-lvl-2 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-2").addClass("overlay"); 
      }
      if (player.level <= 1) { 
        $("#rpg-skills-lvl-1 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-1").addClass("overlay"); 
      }
    });

  $(document).ready(function(){ // ----- Save Skills -----
    $("#save-name").click(function(){
      event.preventDefault()
      console.log("Attack Ability: " + $("#attack-selection").text());
      localStorage.setItem('objPlayer', JSON.stringify(player.attack));
    });
  });

  </script>
  </div><!-- / Level 1 -->

  <div class="wide-275 mar-10 mx-auto text-center">
    <button id="save-name" type="submit" class="btn btn-primary">Save Loadout</button>
  </div>


