  <div id="rpg-skills-lvl-10" class="border-top pad-10" style="width: 100%;">

    <div class="row pad-10"><h6 class="mx-auto">LEVEL 10</h6></div>
    <?php include 'passives/attack2.php'; ?>

  </div><!-- / Level 10 -->

  <div id="rpg-skills-lvl-9" class="border-top pad-10" style="width: 100%;">
    
    <div class="row pad-10"><h6 class="mx-auto">LEVEL 9</h6></div>
    <?php include 'passives/mana2.php'; ?>

  </div><!-- / Level 9 -->

  <div id="rpg-skills-lvl-8" class="border-top pad-10" style="width: 100%;">
    
    <div class="row pad-10"><h6 class="mx-auto">LEVEL 8</h6></div>
    <?php include 'ultimates/aether.php'; ?>

  </div><!-- / Level 8 -->

  <div id="rpg-skills-lvl-7" class="border-top pad-10" style="width: 100%;">
    
    <div class="row pad-10"><h6 class="mx-auto">LEVEL 7</h6></div>
    <?php include 'passives/defense2.php'; ?>

  </div><!-- / Level 7 -->

  <div id="rpg-skills-lvl-6" class="border-top pad-10" style="width: 100%;">
    
    <div class="row pad-10"><h6 class="mx-auto">LEVEL 6</h6></div>
    <?php include 'passives/attack1.php'; ?>

  </div><!-- / Level 6 -->

  <div id="rpg-skills-lvl-5" class="border-top pad-10" style="width: 100%;">
    
    <div class="row pad-10"><h6 class="mx-auto">LEVEL 5</h6></div>
    <?php include 'attacks/aether.php'; ?>

  </div><!-- / Level 5 -->

  <div id="rpg-skills-lvl-4" class="border-top pad-10" style="width: 100%;">
    
    <div class="row pad-10"><h6 class="mx-auto">LEVEL 4</h6></div>
    <?php include 'passives/mana1.php'; ?>

  </div><!-- / Level 4 -->

  <div id="rpg-skills-lvl-3" class="border-top pad-10" style="width: 100%;">
    
    <div class="row pad-10"><h6 class="mx-auto">LEVEL 3</h6></div>
    <?php include 'passives/defense1.php'; ?>

  </div><!-- / Level 3 -->

  <div id="rpg-skills-lvl-2" class="border-top pad-10" style="width: 100%;">
    
    <div class="row pad-10"><h6 class="mx-auto">LEVEL 2</h6></div>
    <?php include 'supports/aether.php'; ?>

  </div><!-- / Level 2 -->

  <div id="rpg-skills-lvl-1" class="border-top pad-10" style="width: 100%;">
    
    <div class="row pad-10"><h6 class="mx-auto">LEVEL 1</h6></div>
    <?php include 'passives/vitality.php'; ?>

  </div><!-- / Level 1 -->

<script>

  new Vue({ el: '#attack-select',
  data: { attackSelection: '' } })

  new Vue({ el: '#support-select',
  data: { supportSelection: '' } })

  new Vue({ el: '#ultimate-select',
  data: { ultimateSelection: '' } })

  new Vue({ el: '#lvl-1-select',
  data: { lvl1Selection: '' } })

  new Vue({ el: '#lvl-3-select',
  data: { lvl3Selection: '' } })

  new Vue({ el: '#lvl-4-select',
  data: { lvl4Selection: '' } })

  new Vue({ el: '#lvl-6-select',
  data: { lvl6Selection: '' } })

  new Vue({ el: '#lvl-7-select',
  data: { lvl7Selection: '' } })

  new Vue({ el: '#lvl-9-select',
  data: { lvl9Selection: '' } })

  new Vue({ el: '#lvl-10-select',
  data: { lvl10Selection: '' } })

</script>