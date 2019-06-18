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

<div id="skill-select" class="y-flex-container pad-b-10">

</div><!-- /.y-flex-container -->

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));
var weapon = JSON.parse(localStorage.getItem('objWeapon'));
var skills = JSON.parse(localStorage.getItem('objSkills'));

$(document).ready(function(){

  if (weapon.name === "Bow") { $("#skill-select").load("skills/skills-bow.php");
  } else if (weapon.name === "Crossbow") { $("#skill-select").load("skills/skills-crossbow.php");
  } else if (weapon.name === "Longbow") { $("#skill-select").load("skills/skills-longbow.php");
  } else if (weapon.name === "Mace") { $("#skill-select").load("skills/skills-mace.php");
  } else if (weapon.name === "Quarterstaff") { $("#skill-select").load("skills/skills-quarterstaff.php");
  } else if (weapon.name === "Tome") { $("#skill-select").load("skills/skills-tome.php");
  } else if (weapon.name === "Ice") { $("#skill-select").load("skills/skills-ice.php");
  } else if (weapon.name === "Fire") { $("#skill-select").load("skills/skills-fire.php");
  } else if (weapon.name === "Lightning") { $("#skill-select").load("skills/skills-lightning.php");  
  } else if (weapon.name === "Bo Staff") { $("#skill-select").load("skills/skills-bostaff.php");
  } else if (weapon.name === "Brawler's Fist") { $("#skill-select").load("skills/skills-fists.php");
  } else if (weapon.name === "Wind Fu") { $("#skill-select").load("skills/skills-windfu.php");
  } else if (weapon.name === "Dagger") { $("#skill-select").load("skills/skills-dagger.php");
  } else if (weapon.name === "Dual Sai") { $("#skill-select").load("skills/skills-sai.php");
  } else if (weapon.name === "Shuriken") { $("#skill-select").load("skills/skills-shuriken.php");
  } else if (weapon.name === "Sword & Shield") { $("#skill-select").load("skills/skills-sword.php");
  } else if (weapon.name === "War Hammer") { $("#skill-select").load("skills/skills-warhammer.php");
  } else if (weapon.name === "Battle Axe") { $("#skill-select").load("skills/skills-battleaxe.php");
  } else if (weapon.name === "Aether Stone") { $("#skill-select").load("skills/skills-aether.php");
  } else if (weapon.name === "Runestone") { $("#skill-select").load("skills/skills-runestone.php");
  } else if (weapon.name === "Runblade") { $("#skill-select").load("skills/skills-runeblade.php");
  } else { $("#skill-select").html("<h2>No Class Selected </h2>");
  }
});
</script>

<footer class="footer mt-auto text-center bg-lightgray">
  <div class="container pad-20">
<div class="pad-b-20">
  <button class="btn btn-dark text-white mar-r-10 mar-l-10" onclick="goBack()" role="button">Return</button>
</div>
<span class="text-muted">&copy;RPGenius 2019. All Rights Reserved.</span>
  </div>

  <script>
function goBack() {
  window.history.back();
}
  </script>

</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>

</html>
