<?php include 'runemaster-runestone.php'; ?>

  <a role="button" onclick="setWeaponRunestone()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-runestone" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'runemaster-runeblade.php'; ?>

  <a role="button" onclick="setWeaponRuneblade()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-runeblade" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'runemaster-aether.php'; ?>

  <a role="button" onclick="setWeaponAether()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-aether" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
function setWeaponRunestone() {
  weapon = {
    name: "Runestone",
    basic: "Frostbolt",
    special: "Arcane Burst",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}

function setWeaponRuneblade() {
  weapon = {
    name: "Runeblade",
    basic: "Crescent Strike",
    special: "Flame Sweep",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}
function setWeaponAether() {
  weapon = {
    name: "Aether Stone",
    basic: "Light Flux",
    special: "Seeking Shadow",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}

$(document).ready(function(){

  // --- Weapon Select Button script ---
  $(".rpg-wpn-runestone").click(function(){
    $("#rpg-wpn-btn-aether").slideUp(300);
    $("#rpg-wpn-btn-runeblade").slideUp(300);
    $("#rpg-wpn-btn-runestone").slideDown(300);
  });
  $(".rpg-wpn-runeblade").click(function(){
    $("#rpg-wpn-btn-aether").slideUp(300);
    $("#rpg-wpn-btn-runestone").slideUp(300);
    $("#rpg-wpn-btn-runeblade").slideDown(300);
  });
  $(".rpg-wpn-aether").click(function(){
    $("#rpg-wpn-btn-runestone").slideUp(300);
    $("#rpg-wpn-btn-runeblade").slideUp(300);
    $("#rpg-wpn-btn-aether").slideDown(300);
  });

});
</script>