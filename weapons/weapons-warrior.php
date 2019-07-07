<?php include 'warrior-sword.php'; ?>

	<a role="button" onclick="setWeaponSword()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-sword" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'warrior-warhammer.php'; ?>

	<a role="button" onclick="setWeaponWarhammer()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-warhammer" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'warrior-battleaxe.php'; ?>

	<a role="button" onclick="setWeaponBattleaxe()" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-battleaxe" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
const setWeaponSword = () => {
  player.weapon = "Sword & Shield";
  player.basic = "Slash";
  player.special = "Shield Ally";
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponWarhammer = () => {
  player.weapon = "War Hammer",
  player.basic = "Slam",
  player.special = "Hammer Swing",
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponBattleaxe = () => {
  player.weapon = "Battle Axe",
  player.basic = "Cleave",
  player.special = "Sunder Armor",
  localStorage.setItem('objPlayer', JSON.stringify(player));
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