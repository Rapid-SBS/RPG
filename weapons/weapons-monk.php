<?php include 'monk-bostaff.php'; ?>

  <button type="button" onclick="setWeaponBostaff()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-bostaff" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'monk-fists.php'; ?>

  <button type="button" onclick="setWeaponFists()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fists" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'monk-windfu.php'; ?>

  <button type="button" onclick="setWeaponWindfu()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-windfu" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script>
var rpgWeapon = localStorage.getItem('rpgWeapon');

function setWeaponBostaff() {
  localStorage.setItem('rpgClass', 'Monk');
  localStorage.setItem('rpgWeapon', 'Bo Staff');
}
function setWeaponCrossbow() {
  localStorage.setItem('rpgClass', 'Monk');
  localStorage.setItem('rpgWeapon', "Brawler's Fists");
}
function setWeaponWindfu() {
  localStorage.setItem('rpgClass', 'Monk');
  localStorage.setItem('rpgWeapon', 'Wind Fu');
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