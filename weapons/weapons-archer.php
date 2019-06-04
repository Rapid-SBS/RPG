<?php include 'archer-bow.php'; ?>
  
  <a role="button" onclick="setWeaponBow()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-bow" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'archer-crossbow.php'; ?>

  <a role="button" onclick="setWeaponCrossbow()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-crossbow" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'archer-longbow.php'; ?>

  <a role="button" onclick="setWeaponLongbow()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-longbow" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script> 
var rpgPlayerWeapon = localStorage.getItem('rpgPlayerWeapon');

function setWeaponBow() {
  localStorage.setItem('rpgPlayerClass', 'Archer');
  localStorage.setItem('rpgPlayerWeapon', 'Bow');
  localStorage.setItem('rpgPlayerBasicAbility', 'Arrow');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Doubleshot');
}
function setWeaponCrossbow() {
  localStorage.setItem('rpgPlayerClass', 'Archer');
  localStorage.setItem('rpgPlayerWeapon', 'Crossbow');
  localStorage.setItem('rpgPlayerBasicAbility', 'Arrow');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Metal Arrow');
}
function setWeaponLongbow() {
  localStorage.setItem('rpgPlayerClass', 'Archer');
  localStorage.setItem('rpgPlayerWeapon', 'Longbow');
  localStorage.setItem('rpgPlayerBasicAbility', 'Arrow');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Snipe');
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