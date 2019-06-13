<?php include 'warrior-sword.php'; ?>

	<a role="button" onclick="setWeaponSword()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-sword" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'warrior-warhammer.php'; ?>

	<a role="button" onclick="setWeaponWarhammer()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-warhammer" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'warrior-battleaxe.php'; ?>

	<a role="button" onclick="setWeaponBattleaxe()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-battleaxe" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
var rpgPlayerWeapon = localStorage.getItem('rpgPlayerWeapon');

function setWeaponSword() {
  localStorage.setItem('rpgPlayerClass', 'Warrior');
  localStorage.setItem('rpgPlayerWeapon', 'Sword & Shield');
  localStorage.setItem('rpgPlayerBasicAbility', 'Slash');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Shield Ally');
}
function setWeaponWarhammer() {
  localStorage.setItem('rpgPlayerClass', 'Warrior');
  localStorage.setItem('rpgPlayerWeapon', 'warhammer');
  localStorage.setItem('rpgPlayerBasicAbility', 'Jab');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Sweeping Blow');
}
function setWeaponBattleaxe() {
  localStorage.setItem('rpgPlayerClass', 'Warrior');
  localStorage.setItem('rpgPlayerWeapon', 'Battleaxe');
  localStorage.setItem('rpgPlayerBasicAbility', 'Cleave');
  localStorage.setItem('rpgPlayerSpecialAbility', 'Sunder Armor');
}

$(document).ready(function(){

	// --- Weapon Select Button script ---
  $(".rpg-wpn-sword").click(function(){
  	$("#rpg-wpn-btn-battleaxe").slideUp(300);
  	$("#rpg-wpn-btn-warhammer").slideUp(300);
    $("#rpg-wpn-btn-sword").slideDown(300);
  });
	$(".rpg-wpn-warhammer").click(function(){
  	$("#rpg-wpn-btn-battleaxe").slideUp(300);
  	$("#rpg-wpn-btn-sword").slideUp(300);
    $("#rpg-wpn-btn-warhammer").slideDown(300);
  });
	$(".rpg-wpn-battleaxe").click(function(){
  	$("#rpg-wpn-btn-sword").slideUp(300);
  	$("#rpg-wpn-btn-warhammer").slideUp(300);
    $("#rpg-wpn-btn-battleaxe").slideDown(300);
  });

});
</script>