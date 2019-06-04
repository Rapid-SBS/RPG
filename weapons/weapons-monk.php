<?php include 'monk-bostaff.php'; ?>

  <a role="button" onclick="setWeaponBostaff()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-bostaff" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'monk-fists.php'; ?>

  <a role="button" onclick="setWeaponFists()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fists" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'monk-windfu.php'; ?>

  <a role="button" onclick="setWeaponWindfu()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-windfu" href="skill-tree.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
var rpgPlayerWeapon = localStorage.getItem('rpgPlayerWeapon');

function setWeaponBostaff() {
  localStorage.setItem('rpgPlayerClass', 'Monk');
  localStorage.setItem('rpgPlayerWeapon', 'Bo Staff');
}
function setWeaponFists() {
  localStorage.setItem('rpgPlayerClass', 'Monk');
  localStorage.setItem('rpgPlayerWeapon', "Brawler's Fist");
}
function setWeaponWindfu() {
  localStorage.setItem('rpgPlayerClass', 'Monk');
  localStorage.setItem('rpgPlayerWeapon', 'Wind Fu');
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