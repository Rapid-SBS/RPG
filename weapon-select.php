{{>header}}

<h3 class="pad-t-20 text-gray text-center pulsing-text-dark"> Select a Weapon... </h3>

<div id="weapon-select" class="y-flex-container pad-b-10">

<script>
var rpgclass = JSON.parse(localStorage.getItem('objRpgclass'));
var player = JSON.parse(localStorage.getItem('objPlayer'));

  $(document).ready(function(){

    // ----- Loads the selected class -----
    if (rpgclass.name === "Warrior") {

      $("#weapon-select").load("weapons/weapons-warrior.hbs");
      
    } else if (rpgclass.name === "Archer") {

      $("#weapon-select").load("weapons/weapons-archer.hbs");

    } else if (rpgclass.name === "Mage") {

      $("#weapon-select").load("weapons/weapons-mage.hbs");
      
    } else if (rpgclass.name === "Cleric") {

      $("#weapon-select").load("weapons/weapons-cleric.hbs");
      
    } else if (rpgclass.name === "Rogue") {

      $("#weapon-select").load("weapons/weapons-rogue.hbs");
      
    } else if (rpgclass.name === "Monk") {

      $("#weapon-select").load("weapons/weapons-monk.hbs");
      
    } else if (rpgclass.name === "Rune Master") {

      $("#weapon-select").load("weapons/weapons-runemaster.hbs");
      
    } else {

      $("#weapon-select").html("<h2>No Class Selected </h2>");
    }
  });
</script>

</div><!-- /.y-flex-container -->

<div class="footer mt-auto text-center bg-lightgray">
  <div class="container pad-t-20">
    <a class="btn btn-dark text-white mar-r-10 mar-l-10" href="/" role="button">Restart</a>
  </div>
</div>
{{>footer}}

