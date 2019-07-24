<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>

  <title>RPGenerator</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div class="text-white text-center bg-primary">
  <h5 class="pad-10"> Skill Tree</h5>
  <p class="pad-b-10" style="margin-bottom: 0;">You may select 1 skill for each level.</p>
</div>

<div id="skill-select" class="y-flex-container">

</div><!-- /.y-flex-container -->

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));

$(document).ready(function(){

  let weapon = player.weapon.id;
  let skillPage = {
    bow: "skills/skills-bow.php",
    crossbow: "skills/skills-crossbow.php",
    longbow: "skills/skills-longbow.php",
    mace: "skills/skills-mace.php",
    quarterstaff: "skills/skills-quarterstaff.php",
    tome: "skills/skills-tome.php",
    ice: "skills/skills-ice.php",
    fire: "skills/skills-fire.php",
    lightning: "skills/skills-lightning.php",
    bostaff: "skills/skills-bostaff.php",
    brawler: "skills/skills-brawler.php",
    windfu: "skills/skills-windfu.php",
    dagger: "skills/skills-dagger.php",
    sai: "skills/skills-sai.php",
    shuriken: "skills/skills-shuriken.php",
    sword: "skills/skills-sword.php",
    warhammer: "skills/skills-warhammer.php",
    battleaxe: "skills/skills-battleaxe.php",
    aether: "skills/skills-aether.php",
    runestone: "skills/skills-runestone.php",
    runeblade: "skills/skills-runeblade.php"
  }

  $("#skill-select").load(skillPage[player.weapon.id]);
  $("#skill-tree-footer").load("skills/footer.php");
  
});

</script>

<div id="skill-tree-footer">

</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>

</html>
