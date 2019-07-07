<?php include 'mage-ice.php'; ?>

  <a role="button" onclick="setWeaponIce()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-ice" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'mage-fire.php'; ?>

  <a role="button" onclick="setWeaponFire()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fire" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'mage-lightning.php'; ?>

  <a role="button" onclick="setWeaponLightning()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-lightning" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
const setWeaponIce = () => {
  player.weapon = "Ice Stone";
  player.basic = "Ice Blast";
  player.special = "Glacial Barrier";
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponFire = () => {
  player.weapon = "Fire Stone";
  player.basic = "Fireball";
  player.special = "Immolate";
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponLightning = () => {
  player.weapon = "Lightning Stone";
  player.basic = "Spark";
  player.special = "Discharge";
  localStorage.setItem('objPlayer', JSON.stringify(player));
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