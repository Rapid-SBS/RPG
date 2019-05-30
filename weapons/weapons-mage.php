<?php include 'mage-ice.php'; ?>

  <button type="button" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-ice" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'mage-fire.php'; ?>

  <button type="button" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fire" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'mage-lightning.php'; ?>

  <button type="button" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-lightning" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script> 
$(document).ready(function(){

var rpgClass = localStorage.getItem('rpgClass');

  // --- Weapon Select Button script ---
  $(".rpg-wpn-ice").click(function(){
    $("#rpg-wpn-btn-lightning").slideUp(300);
    $("#rpg-wpn-btn-fire").slideUp(300);
    $("#rpg-wpn-btn-ice").slideDown(300);
  });
  $(".rpg-wpn-fire").click(function(){
    $("#rpg-wpn-btn-lightning").slideUp(300);
    $("#rpg-wpn-btn-ice").slideUp(300);
    $("#rpg-wpn-btn-fire").slideDown(300);
  });
  $(".rpg-wpn-lightning").click(function(){
    $("#rpg-wpn-btn-ice").slideUp(300);
    $("#rpg-wpn-btn-fire").slideUp(300);
    $("#rpg-wpn-btn-lightning").slideDown(300);
  });

  console.log("Class: " + rpgClass);

});
</script>