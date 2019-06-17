<?php include 'rogue-dagger.php'; ?>

  <a role="button" @click="setWeaponDagger" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-dagger" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'rogue-sai.php'; ?>

  <a role="button" @click="setWeaponSai" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-sai" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'rogue-shuriken.php'; ?>

  <a role="button" @click="setWeaponShuriken" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-shuriken" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
function setWeaponDagger() {
  weapon = {
    name: "Dagger",
    basic: "Stab",
    special: "Poison Blade",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}

function setWeaponSai() {
  weapon = {
    name: "Dual Sai",
    basic: "Riposte",
    special: "Blade Dance",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}
function setWeaponShuriken() {
  weapon = {
    name: "Shuriken",
    basic: "Shuriken Throw",
    special: "Substitution",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
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