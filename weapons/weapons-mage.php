<?php include 'mage-ice.php'; ?>

  <a role="button" @click="setWeaponIce" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-ice" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'mage-fire.php'; ?>

  <a role="button" @click="setWeaponFire" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fire" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'mage-lightning.php'; ?>

  <a role="button" @click="setWeaponLightning" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-lightning" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
function setWeaponIce() {
  weapon = {
    name: "Ice Stone",
    basic: "Ice Blast",
    special: "Glacial Barrier",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}

function setWeaponFire() {
  weapon = {
    name: "Fire Stone",
    basic: "Fireball",
    special: "Immolate",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}
function setWeaponLightning() {
  weapon = {
    name: "Lightning Stone",
    basic: "Spark",
    special: "Discharge",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
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