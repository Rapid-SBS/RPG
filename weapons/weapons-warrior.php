<?php include 'warrior-sword.php'; ?>

	<button type="button" onclick="setWeaponSword()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-sword" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'warrior-halberd.php'; ?>

	<button type="button" onclick="setWeaponHalberd()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-halberd" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'warrior-battleaxe.php'; ?>

	<button type="button" onclick="setWeaponBattleaxe()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-battleaxe" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script>
var rpgWeapon = localStorage.getItem('rpgWeapon');

function setWeaponSword() {
  localStorage.setItem('rpgClass', 'Warrior');
  localStorage.setItem('rpgWeapon', 'Sword & Shield');
}
function setWeaponHalberd() {
  localStorage.setItem('rpgClass', 'Warrior');
  localStorage.setItem('rpgWeapon', 'Halberd');
}
function setWeaponBattleaxe() {
  localStorage.setItem('rpgClass', 'Warrior');
  localStorage.setItem('rpgWeapon', 'Battleaxe');
}

$(document).ready(function(){

	// --- Weapon Select Button script ---
  $(".rpg-wpn-sword").click(function(){
  	$("#rpg-wpn-btn-battleaxe").slideUp(300);
  	$("#rpg-wpn-btn-halberd").slideUp(300);
    $("#rpg-wpn-btn-sword").slideDown(300);
  });
	$(".rpg-wpn-halberd").click(function(){
  	$("#rpg-wpn-btn-battleaxe").slideUp(300);
  	$("#rpg-wpn-btn-sword").slideUp(300);
    $("#rpg-wpn-btn-halberd").slideDown(300);
  });
	$(".rpg-wpn-battleaxe").click(function(){
  	$("#rpg-wpn-btn-sword").slideUp(300);
  	$("#rpg-wpn-btn-halberd").slideUp(300);
    $("#rpg-wpn-btn-battleaxe").slideDown(300);
  });

});
</script>