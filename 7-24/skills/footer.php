 <script>
  var player = JSON.parse(localStorage.getItem('objPlayer'));
  var skills = JSON.parse(localStorage.getItem('objSkills'));

  new Vue({ el: '#attack-select',
  data: { attackSelection: '' } })

  new Vue({ el: '#support-select',
  data: { supportSelection: '' } })

  new Vue({ el: '#ultimate-select',
  data: { ultimateSelection: '' } })

  new Vue({ el: '#lvl-1-select',
  data: { lvl1Selection: '' } })

  new Vue({ el: '#lvl-3-select',
  data: { lvl3Selection: '' } })

  new Vue({ el: '#lvl-4-select',
  data: { lvl4Selection: '' } })

  new Vue({ el: '#lvl-6-select',
  data: { lvl6Selection: '' } })

  new Vue({ el: '#lvl-7-select',
  data: { lvl7Selection: '' } })

  new Vue({ el: '#lvl-9-select',
  data: { lvl9Selection: '' } })

  new Vue({ el: '#lvl-10-select',
  data: { lvl10Selection: '' } })

  $("h4").hide();

  $(document).ready(function(){

    if (player.level < 10) { 
      $("#rpg-skills-lvl-10 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-10").addClass("overlay"); 
    }
    if (player.level < 9) { 
      $("#rpg-skills-lvl-9 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-9").addClass("overlay"); 
    }
    if (player.level < 8) { 
      $("#rpg-skills-lvl-8 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-8").addClass("overlay"); 
    }
    if (player.level < 7) { 
      $("#rpg-skills-lvl-7 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-7").addClass("overlay"); 
    }
    if (player.level < 6) { 
      $("#rpg-skills-lvl-6 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-6").addClass("overlay"); 
    }
    if (player.level < 5) { 
      $("#rpg-skills-lvl-5 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-5").addClass("overlay"); 
    }
    if (player.level < 4) { 
      $("#rpg-skills-lvl-4 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-4").addClass("overlay"); 
    }
    if (player.level < 3) { 
      $("#rpg-skills-lvl-3 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-3").addClass("overlay"); 
    }
    if (player.level < 2) { 
      $("#rpg-skills-lvl-2 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-2").addClass("overlay"); 
    }
    if (player.level < 1) { 
      $("#rpg-skills-lvl-1 > div > div > label").addClass("disabled unclickable");
      $("#rpg-skills-lvl-1").addClass("overlay"); 
    }
  });

  $(document).ready(function(){ // ----- Save Skills -----

    $("#save-name").click(function(){
      skills = { hp: 0, att: 0, def: 0, int: 0, res: 0, mana: 1}
      let passives = {
          one: undefined,
          three: undefined,
          four: undefined,
          six: undefined,
          seven: undefined,
          nine: undefined,
          ten: undefined}

      skills.attack = $("#attack-selection").text();
      skills.support = $("#support-selection").text();
      skills.ultimate = $("#ultimate-selection").text();
      passives.one = $("#lvl-1-selection").text();
      passives.three = $("#lvl-3-selection").text();
      passives.four = $("#lvl-4-selection").text();
      passives.six = $("#lvl-6-selection").text();
      passives.seven = $("#lvl-7-selection").text();
      passives.nine = $("#lvl-9-selection").text();
      passives.ten = $("#lvl-10-selection").text();


      if (passives.one === "Vitality") { 
          skills.hp = skills.hp + 2; }

      if (passives.three === "DEF I") { 
          skills.def = skills.def + 1;
          skills.hp = skills.hp + 1; } 
      else if (passives.three === "RES I") {
          skills.res = skills.res + 1;
          skills.hp = skills.hp + 1; }

      if (passives.four === "Mana I") { 
          skills.mana = skills.mana + 1; }

      if (passives.six === "ATT I") { 
          skills.att = skills.att + 1; } 
      else if (passives.six === "INT I") {
          skills.int = skills.int + 1; }

      if (passives.seven === "DEF II") { 
          skills.def = skills.def + 1;
          skills.hp = skills.hp + 1; } 
      else if (passives.seven === "RES II") {
          skills.res = skills.res + 1;
          skills.hp = skills.hp + 1; }

      if (passives.nine === "Mana II") { 
          skills.mana = skills.mana + 1; }

      if (passives.ten === "ATT II") { 
          skills.att = skills.att + 1; } 
      else if (passives.ten === "INT II") {
          skills.int = skills.int + 1; }

      console.log(skills);
      console.log(passives);

      localStorage.setItem('objSkills', JSON.stringify(skills));
      localStorage.setItem('objPassives', JSON.stringify(passives));

      $('#skills-saved').fadeIn('slow', function(){
        $('#skills-saved').delay(3000).fadeOut();
        window.setTimeout(function () {
          window.location.href = "player-menu.php";
        }, 1500)}
      )
    });
  });

  </script>

  <script> // --- Toggles active state on radio buttons ---
  $('label').click(function() {
     $(this).addClass("active")
            .siblings('label').removeClass("active");
  });
  </script>

  <div id="skills-saved" class="text-white text-center pad-10 bg-lightgreen" style="display: none; width: 100%">
    <h5 class="pad-10">Skills Saved!</h5>
  </div>

<footer class="footer mt-auto text-center pad-t-10 bg-lightgray">
  <div class="container pad-20">
    <div class="pad-b-20">
      <button class="btn btn-dark text-white mar-r-10 mar-l-10" onclick="goBack()" role="button">Return</button>
      <button id="save-name" type="submit" class="btn btn-primary">Save Loadout</button>
    </div>
    <span class="text-muted">&copy;RPGenius 2019. All Rights Reserved.</span>
  </div>

  <script>
    function goBack() {
      window.history.back();
    }
  </script>

</footer>
