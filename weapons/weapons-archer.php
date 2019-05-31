<?php include 'archer-bow.php'; ?>
  
  <button type="button" onclick="setWeaponBow()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-bow" href="skill-select.php" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'archer-crossbow.php'; ?>

  <button type="button" onclick="setWeaponCrossbow()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-crossbow" href="skill-select.php" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'archer-longbow.php'; ?>

  <button type="button" onclick="setWeaponLongbow()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-longbow" href="skill-select.php" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script> 
var rpgWeapon = localStorage.getItem('rpgWeapon');

function setWeaponBow() {
  localStorage.setItem('rpgClass', 'Archer');
  localStorage.setItem('rpgWeapon', 'Bow');
}
function setWeaponCrossbow() {
  localStorage.setItem('rpgClass', 'Archer');
  localStorage.setItem('rpgWeapon', 'Crossbow');
}
function setWeaponLongbow() {
  localStorage.setItem('rpgClass', 'Archer');
  localStorage.setItem('rpgWeapon', 'Longbow');
}

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