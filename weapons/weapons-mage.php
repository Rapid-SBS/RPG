<?php include 'mage-ice.php'; ?>

  <a role="button" onclick="setWeaponIce()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-ice" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'mage-fire.php'; ?>

  <a role="button" onclick="setWeaponFire()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fire" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'mage-lightning.php'; ?>

  <a role="button" onclick="setWeaponLightning()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-lightning" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
var rpgPlayerWeapon = localStorage.getItem('rpgPlayerWeapon');

function setWeaponIce() {
  localStorage.setItem('rpgPlayerClass', 'Mage');
  localStorage.setItem('rpgPlayerWeapon', 'Ice Stone');
  localStorage.setItem('rpgPlayerBasicAbility', 'Ice Blast');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Glacial Barrier');
}
function setWeaponFire() {
  localStorage.setItem('rpgPlayerClass', 'Mage');
  localStorage.setItem('rpgPlayerWeapon', 'Fire Stone');
  localStorage.setItem('rpgPlayerBasicAbility', 'Fireball');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Immolate');
}
function setWeaponLightning() {
  localStorage.setItem('rpgPlayerClass', 'Mage');
  localStorage.setItem('rpgPlayerWeapon', 'Lightning Stone');
  localStorage.setItem('rpgPlayerBasicAbility', 'Spark');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Discharge');
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