<?php include 'runemaster-runestone.php'; ?>

  <a role="button" onclick="setWeaponRunestone()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-runestone" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'runemaster-runeblade.php'; ?>

  <a role="button" onclick="setWeaponRuneblade()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-runeblade" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'runemaster-aether.php'; ?>

  <a role="button" onclick="setWeaponAether()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-aether" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
const setWeaponRunestone = () => {
  player.weapon = new Weapon("Runestone", "runestone");
  player.basic = "Frostbolt";
  player.special = "Arcane Burst";
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponRuneblade = () => {
  player.weapon = new Weapon("Runeblade", "runeblade");
  player.basic = "Crescent Strike";
  player.special = "Flame Sweep";
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponAether = () => {
  player.weapon = new Weapon("Aether", "aether");
  player.basic = "Light Flux";
  player.special = "Seeking Shadow";
  localStorage.setItem('objPlayer', JSON.stringify(player));
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