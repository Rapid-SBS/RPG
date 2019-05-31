<?php include 'mage-ice.php'; ?>

  <button type="button" onclick="setWeaponIce()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-ice" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'mage-fire.php'; ?>

  <button type="button" onclick="setWeaponFire()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fire" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'mage-lightning.php'; ?>

  <button type="button" onclick="setWeaponLightning()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-lightning" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script>
var rpgWeapon = localStorage.getItem('rpgWeapon');

function setWeaponIce() {
  localStorage.setItem('rpgClass', 'Mage');
  localStorage.setItem('rpgWeapon', 'Ice Stone');
}
function setWeaponFire() {
  localStorage.setItem('rpgClass', 'Mage');
  localStorage.setItem('rpgWeapon', 'Fire Stone');
}
function setWeaponLightning() {
  localStorage.setItem('rpgClass', 'Mage');
  localStorage.setItem('rpgWeapon', 'Lightning Stone');
}

$(document).ready(function(){

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

});
</script>