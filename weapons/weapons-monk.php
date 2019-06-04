<?php include 'monk-bostaff.php'; ?>

  <button type="button" onclick="setWeaponBostaff()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-bostaff" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'monk-fists.php'; ?>

  <button type="button" onclick="setWeaponFists()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fists" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'monk-windfu.php'; ?>

  <button type="button" onclick="setWeaponWindfu()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-windfu" style="display: none;"><span class="pulsing-text-white">Select</span></button>

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