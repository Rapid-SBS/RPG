<?php include 'archer-bow.php'; ?>
  
  <button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-bow" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'archer-crossbow.php'; ?>

  <button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-crossbow" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'archer-longbow.php'; ?>

  <button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-longbow" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script> 
$(document).ready(function(){

  // --- Weapon Select Button script ---
  $(".rpg-wpn-bow").click(function(){
    $("#rpg-wpn-btn-crossbow").slideUp(300);
    $("#rpg-wpn-btn-longbow").slideUp(300);
    $("#rpg-wpn-btn-bow").slideDown(300);
  });
  $(".rpg-wpn-longbow").click(function(){
    $("#rpg-wpn-btn-crossbow").slideUp(300);
    $("#rpg-wpn-btn-bow").slideUp(300);
    $("#rpg-wpn-btn-longbow").slideDown(300);
  });
  $(".rpg-wpn-crossbow").click(function(){
    $("#rpg-wpn-btn-bow").slideUp(300);
    $("#rpg-wpn-btn-longbow").slideUp(300);
    $("#rpg-wpn-btn-crossbow").slideDown(300);
  });

});
</script>