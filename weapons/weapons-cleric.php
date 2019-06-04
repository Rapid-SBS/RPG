<?php include 'cleric-mace.php'; ?>

  <a role="button" onclick="setWeaponMace()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-mace" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'cleric-quarterstaff.php'; ?>

  <a role="button" onclick="setWeaponQuarterstaff()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-quarterstaff" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'cleric-tome.php'; ?>

  <a role="button" onclick="setWeaponTome()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-tome" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
var rpgPlayerWeapon = localStorage.getItem('rpgPlayerWeapon');

function setWeaponMace() {
  localStorage.setItem('rpgPlayerClass', 'Cleric');
  localStorage.setItem('rpgPlayerWeapon', 'Mace & Shield');
  localStorage.setItem('rpgPlayerBasicAbility', 'Bludgeon');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Shield Ally');
}
function setWeaponQuarterstaff() {
  localStorage.setItem('rpgPlayerClass', 'Cleric');
  localStorage.setItem('rpgPlayerWeapon', 'Quarterstaff');
  localStorage.setItem('rpgPlayerBasicAbility', 'Downward Strike');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Mend');
}
function setWeaponTome() {
  localStorage.setItem('rpgPlayerClass', 'Cleric');
  localStorage.setItem('rpgPlayerWeapon', 'Holy Tome');
  localStorage.setItem('rpgPlayerBasicAbility', 'Blessing');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Flash Heal');
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