<?php include 'cleric-mace.php'; ?>

  <a role="button" onclick="setWeaponMace()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-mace" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'cleric-quarterstaff.php'; ?>

  <a role="button" onclick="setWeaponQuarterstaff()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-quarterstaff" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'cleric-tome.php'; ?>

  <a role="button" onclick="setWeaponTome()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-tome" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
const setWeaponMace = () => {
  player.weapon = "Mace & Shield";
  player.basic = "Bludgeon";
  player.special = "Shield Ally";
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponQuarterstaff = () => {
  player.weapon = "Quarterstaff",
  player.basic = "Downward Strike",
  player.special = "Flash Heal",
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponTome = () => {
  player.weapon = "Holy Tome",
  player.basic = "Blessing",
  player.special = "Healing Circle",
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

$(document).ready(function(){

  // --- Weapon Select Button script ---
  $(".rpg-wpn-mace").click(function(){
    $("#rpg-wpn-btn-tome").slideUp(300);
    $("#rpg-wpn-btn-quarterstaff").slideUp(300);
    $("#rpg-wpn-btn-mace").slideDown(300);
  });
  $(".rpg-wpn-quarterstaff").click(function(){
    $("#rpg-wpn-btn-tome").slideUp(300);
    $("#rpg-wpn-btn-mace").slideUp(300);
    $("#rpg-wpn-btn-quarterstaff").slideDown(300);
  });
  $(".rpg-wpn-tome").click(function(){
    $("#rpg-wpn-btn-mace").slideUp(300);
    $("#rpg-wpn-btn-quarterstaff").slideUp(300);
    $("#rpg-wpn-btn-tome").slideDown(300);
  });

});
</script>