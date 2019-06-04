<?php include 'rogue-dagger.php'; ?>

  <a role="button" onclick="setWeaponDagger()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-dagger" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'rogue-sai.php'; ?>

  <a role="button" onclick="setWeaponSai()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-sai" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'rogue-shuriken.php'; ?>

  <a role="button" onclick="setWeaponShuriken()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-shuriken" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
var rpgPlayerWeapon = localStorage.getItem('rpgPlayerWeapon');

function setWeaponDagger() {
  localStorage.setItem('rpgPlayerClass', 'Rogue');
  localStorage.setItem('rpgPlayerWeapon', 'Dagger');
  localStorage.setItem('rpgPlayerBasicAbility', 'Stab');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Poisoned Blade');
}
function setWeaponSai() {
  localStorage.setItem('rpgPlayerClass', 'Rogue');
  localStorage.setItem('rpgWeapon', 'Dual Sai');
  localStorage.setItem('rpgPlayerBasicAbility', 'Riposte');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Blade Storm');
}
function setWeaponShuriken() {
  localStorage.setItem('rpgPlayerClass', 'Rogue');
  localStorage.setItem('rpgPlayerWeapon', 'Shuriken');
  localStorage.setItem('rpgPlayerBasicAbility', 'Shuriken Throw');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Smoke Bomb');
}

$(document).ready(function(){

  // --- Weapon Select Button script ---
  $(".rpg-wpn-dagger").click(function(){
    $("#rpg-wpn-btn-shuriken").slideUp(300);
    $("#rpg-wpn-btn-sai").slideUp(300);
    $("#rpg-wpn-btn-dagger").slideDown(300);
  });
  $(".rpg-wpn-sai").click(function(){
    $("#rpg-wpn-btn-shuriken").slideUp(300);
    $("#rpg-wpn-btn-dagger").slideUp(300);
    $("#rpg-wpn-btn-sai").slideDown(300);
  });
  $(".rpg-wpn-shuriken").click(function(){
    $("#rpg-wpn-btn-dagger").slideUp(300);
    $("#rpg-wpn-btn-sai").slideUp(300);
    $("#rpg-wpn-btn-shuriken").slideDown(300);
  });

});
</script>