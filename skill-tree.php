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
    /*
    Crossbow: "skills/skills-bow.php",
    Longbow: "skills/skills-crossbow.php",
    Mace & Shield: "skills/skills-longbow.php",
    "skills/skills-mace.php",
    "skills/skills-quarterstaff.php",
    "skills/skills-tome.php",
    "skills/skills-ice.php",
    "skills/skills-fire.php",
    "skills/skills-lightning.php",
    "skills/skills-bostaff.php",
    "skills/skills-brawler.php",
    "skills/skills-windfu.php",
    "skills/skills-dagger.php",
    "skills/skills-sai.php",
    "skills/skills-shuriken.php",
    "skills/skills-sword.php",
    "skills/skills-warhammer.php",
    "skills/skills-battleaxe.php",
    "skills/skills-aether.php",
    "skills/skills-runestone.php",
    "skills/skills-runeblade.php"
  }


  if (player.weapon === "Bow") { $("#skill-select").load("skills/skills-bow.php");
  } else if (player.weapon === "Crossbow") { $("#skill-select").load("skills/skills-crossbow.php");
  } else if (player.weapon === "Longbow") { $("#skill-select").load("skills/skills-longbow.php");
  } else if (player.weapon === "Mace & Shield") { $("#skill-select").load("skills/skills-mace.php");
  } else if (player.weapon === "Quarterstaff") { $("#skill-select").load("skills/skills-quarterstaff.php");
  } else if (player.weapon === "Holy Tome") { $("#skill-select").load("skills/skills-tome.php");
  } else if (player.weapon === "Ice Stone") { $("#skill-select").load("skills/skills-ice.php");
  } else if (player.weapon === "Fire Stone") { $("#skill-select").load("skills/skills-fire.php");
  } else if (player.weapon === "Lightning Stone") { $("#skill-select").load("skills/skills-lightning.php");  
  } else if (player.weapon === "Bo Staff") { $("#skill-select").load("skills/skills-bostaff.php");
  } else if (player.weapon === "Brawler's Fist") { $("#skill-select").load("skills/skills-brawler.php");
  } else if (player.weapon === "Wind Fu") { $("#skill-select").load("skills/skills-windfu.php");
  } else if (player.weapon === "Dagger") { $("#skill-select").load("skills/skills-dagger.php");
  } else if (player.weapon === "Dual Sai") { $("#skill-select").load("skills/skills-sai.php");
  } else if (player.weapon === "Shuriken") { $("#skill-select").load("skills/skills-shuriken.php");
  } else if (player.weapon === "Sword & Shield") { $("#skill-select").load("skills/skills-sword.php");
  } else if (player.weapon === "War Hammer") { $("#skill-select").load("skills/skills-warhammer.php");
  } else if (player.weapon === "Battle Axe") { $("#skill-select").load("skills/skills-battleaxe.php");
  } else if (player.weapon === "Aether Stone") { $("#skill-select").load("skills/skills-aether.php");
  } else if (player.weapon === "Runestone") { $("#skill-select").load("skills/skills-runestone.php");
  } else if (player.weapon === "Runeblade") { $("#skill-select").load("skills/skills-runeblade.php");
  } else { $("#skill-select").html("<h2>No Class Selected </h2>"); }
*/
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
