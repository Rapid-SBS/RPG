<?php include 'archer-bow.php'; ?>
  
  <a role="button" @click="setWeaponBow" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-bow" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'archer-crossbow.php'; ?>

  <a role="button" @click="setWeaponCrossbow" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-crossbow" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'archer-longbow.php'; ?>

  <a role="button" @click="setWeaponLongbow" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-longbow" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script> 

function setWeaponBow() {
  weapon = {
    name: "Bow",
    basic: "Arrow",
    special: "Doubleshot",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}

function setWeaponCrossbow() {
  weapon = {
    name: "Crossbow",
    basic: "Arrow",
    special: "Metal Arrow",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}
function setWeaponLongbow() {
  weapon = {
    name: "Longbow",
    basic: "Arrow",
    special: "Snipe",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
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