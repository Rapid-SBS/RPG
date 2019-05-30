<?php include 'monk-bostaff.php'; ?>

  <button type="button" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-bostaff" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'monk-fists.php'; ?>

  <button type="button" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fists" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'monk-windfu.php'; ?>

  <button type="button" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-windfu" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script> 
$(document).ready(function(){

var rpgClass = localStorage.getItem('rpgClass');

  // --- Weapon Select Button script ---
  $(".rpg-wpn-bostaff").click(function(){
    $("#rpg-wpn-btn-windfu").slideUp(300);
    $("#rpg-wpn-btn-fists").slideUp(300);
    $("#rpg-wpn-btn-bostaff").slideDown(300);
  });
  $(".rpg-wpn-fists").click(function(){
    $("#rpg-wpn-btn-windfu").slideUp(300);
    $("#rpg-wpn-btn-bostaff").slideUp(300);
    $("#rpg-wpn-btn-fists").slideDown(300);
  });
  $(".rpg-wpn-windfu").click(function(){
    $("#rpg-wpn-btn-bostaff").slideUp(300);
    $("#rpg-wpn-btn-fists").slideUp(300);
    $("#rpg-wpn-btn-windfu").slideDown(300);
  });

  console.log("Class: " + rpgClass);

});
</script>