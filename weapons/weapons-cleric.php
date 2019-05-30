<?php include 'cleric-mace.php'; ?>

  <button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-mace" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'cleric-quarterstaff.php'; ?>

  <button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-quarterstaff" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'cleric-tome.php'; ?>

  <button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-tome" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script> 
$(document).ready(function(){

  // --- Weapon Select Button script ---
  $(".rpg-wpn-mace").click(function(){
    $("#rpg-wpn-btn-tome").slideUp(300);
    $("#rpg-wpn-btn-quarterstaff").slideUp(300);
    $("#rpg-wpn-btn-mace").slideDown(300);
  });
  $(".rpg-wpn-quarterstaff").click(function(){
    $("#rpg-wpn-btn-tome").slideUp(300);
    $("#rpg-wpn-btn-mace").slideUp(300);
    $("#rpg-wpn-btn-quarterstaff").slideDown(300);
  });
  $(".rpg-wpn-tome").click(function(){
    $("#rpg-wpn-btn-mace").slideUp(300);
    $("#rpg-wpn-btn-quarterstaff").slideUp(300);
    $("#rpg-wpn-btn-tome").slideDown(300);
  });

});
</script>