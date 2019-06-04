<?php include 'rogue-dagger.php'; ?>

  <button type="button" onclick="setWeaponDagger()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-dagger" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'rogue-sai.php'; ?>

  <button type="button" onclick="setWeaponSai()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-sai" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'rogue-shuriken.php'; ?>

  <button type="button" onclick="setWeaponShuriken()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-shuriken" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script>
var rpgPlayerWeapon = localStorage.getItem('rpgPlayerWeapon');

function setWeaponDagger() {
  localStorage.setItem('rpgPlayerClass', 'Rogue');
  localStorage.setItem('rpgPlayerWeapon', 'Dagger');
}
function setWeaponSai() {
  localStorage.setItem('rpgPlayerClass', 'Rogue');
  localStorage.setItem('rpgWeapon', 'Dual Sai');
}
function setWeaponShuriken() {
  localStorage.setItem('rpgPlayerClass', 'Rogue');
  localStorage.setItem('rpgPlayerWeapon', 'Shuriken');
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