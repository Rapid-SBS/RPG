<?php include 'monk-bostaff.php'; ?>

  <a role="button" onclick="setWeaponBostaff()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-bostaff" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'monk-fists.php'; ?>

  <a role="button" onclick="setWeaponFists()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fists" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'monk-windfu.php'; ?>

  <a role="button" onclick="setWeaponWindfu()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-windfu" href="name.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
const setWeaponBostaff = () => {
  player.weapon = "Bo Staff";
  player.basic = "Cross Strike";
  player.special = "Leg Sweep";
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponFists = () => {
  player.weapon = "Brawler's Fist",
  player.basic = "Uppercut",
  player.special = "Chi Burst",
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

const setWeaponWindfu = () => {
  player.weapon = "Wind Fu",
  player.basic = "Reverse Kick",
  player.special = "Wind Slicer",
  localStorage.setItem('objPlayer', JSON.stringify(player));
}

$(document).ready(function(){

  // --- Weapon Select Button script ---
  $(".rpg-wpn-bostaff").click(function(){
    $("#rpg-wpn-btn-windfu").slideUp(300);
    $("#rpg-wpn-btn-fists").slideUp(300);
    $("#rpg-wpn-btn-bostaff").slideDown(300);
  });
  $(".rpg-wpn-fists").click(function(){
    $("#rpg-wpn-btn-windfu").slideUp(300);
    $("#rpg-wpn-btn-bostaff").slideUp(300);
    $("#rpg-wpn-btn-fists").slideDown(300);
  });
  $(".rpg-wpn-windfu").click(function(){
    $("#rpg-wpn-btn-bostaff").slideUp(300);
    $("#rpg-wpn-btn-fists").slideUp(300);
    $("#rpg-wpn-btn-windfu").slideDown(300);
  });

});
</script>