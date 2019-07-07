<?php include 'archer-bow.php'; ?>
  
  <a role="button" onclick="setWeaponBow()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-bow" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'archer-crossbow.php'; ?>

  <a role="button" onclick="setWeaponCrossbow()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-crossbow" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'archer-longbow.php'; ?>

  <a role="button" onclick="setWeaponLongbow()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-longbow" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script> 
const setWeaponBow = () => {
  player.weapon = "Bow";
  player.basic = "Arrow";
  player.special = "Doubleshot";
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponCrossbow = () => {
  player.weapon = "Crossbow";
  player.basic = "Arrow";
  player.special = "Metal Arrow";
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponLongbow = () => {
  player.weapon = "Longbow";
  player.basic = "Arrow";
  player.special = "Snipe";
  localStorage.setItem('objPlayer', JSON.stringify(player));
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