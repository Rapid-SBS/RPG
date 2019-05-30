<?php include 'warrior-sword.php'; ?>

	<button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-sword" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'warrior-halberd.php'; ?>

	<button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-halberd" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<?php include 'warrior-battleaxe.php'; ?>

	<button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-battleaxe" style="display: none;"><span class="pulsing-text-white">Select</span></button>

<script> 
$(document).ready(function(){

var rpgClass = localStorage.getItem('rpgClass');

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

	console.log("Class: " + rpgClass);

});
</script>