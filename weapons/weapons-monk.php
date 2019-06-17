<?php include 'monk-bostaff.php'; ?>

  <a role="button" onclick="setWeaponBostaff()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-bostaff" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'monk-fists.php'; ?>

  <a role="button" onclick="setWeaponFists()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-fists" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<?php include 'monk-windfu.php'; ?>

  <a role="button" onclick="setWeaponWindfu()" class="btn btn-success rpg-wpn-select-btn" id="rpg-wpn-btn-windfu" href="skill-tree-preview.php" style="display: none;"><span class="pulsing-text-white">Select</span></a>

<script>
function setWeaponBostaff() {
  weapon = {
    name: "Bo Staff",
    basic: "Cross Strike",
    special: "Leg Sweep",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}

function setWeaponFists() {
  weapon = {
    name: "Brawler's Fist",
    basic: "Uppercut",
    special: "Chi Burst",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
}
function setWeaponWindfu() {
  weapon = {
    name: "Wind Fu",
    basic: "Reverse Kick",
    special: "Wind Slicer",
  }

  localStorage.setItem('objWeapon', JSON.stringify(weapon));
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