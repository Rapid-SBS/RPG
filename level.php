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
  <script src="js/vue-slider-component.umd.min.js"></script>
  <link rel="stylesheet" type="text/css" href="loading-bar/loading-bar.css"/>
  <script type="text/javascript" src="loading-bar/loading-bar.js"></script>


  <title>RPGenerator</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/slider.css">

</head>

<body>

<div class="text-white text-center bg-primary">
  <h5 class="pad-10"> Character Level </h5>
  <p class="pad-b-10" style="margin-bottom: 0;">Add Experience points or manually set level.</p>
</div>

<div class="container max-wide-380">

  <div class="row text-center mx-auto pad-20">
    <div class="col">
      <h5 id="player-level" class="pad-5"></h5>
    </div>
  </div><!-- /.row -->

  <div class="row text-center">
    <div class="mx-auto" style="width: 90%;">
      <h6 id="current-exp" style="display: inline;"></h6><h6 id="level-exp" style="display: inline;"></h6>
    </div>
  </div>

  <div class="row text-center">
    <div class="col" style="width: 100%;">
      <div id="exp-bar" class="mx-auto" 
      data-stroke="#00dd00" 
      data-stroke-width="15" 
      data-stroke-trail-width="15"
      style="width: 100%; height: 20%; "></div>
    </div>
  </div>

  <div class="row text-center pad-b-20">
    <div class="mx-auto">
      <button id="add-exp" class="btn btn-primary">Add 30 Exp</button>
      <button id="clear-exp" class="btn btn-primary">Clear Exp</button>
    </div>
  </div><!-- /.row -->  

  <div id="lvl" class="text-center mx-auto" style="width: 90%;">
    <vue-slider
      ref="slider"
      v-model="value"
      v-bind="options"
    ></vue-slider>
    <h4>New Level: {{ value }}</h4>
    <button @click="setLevel" class="btn btn-primary mar-20">Set Level</button>
  </div>

</div><!-- /.container -->

<div id="level-saved" class="text-white text-center pad-10 bg-lightgreen" style="display: none;">
  <h5 class="pad-10">Level Updated!</h5>
</div>

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));

// ===== Experience Bar + Add Exp =====
$(document).ready(function(){ 
  // --- Initialize Variables
  let currentExp = player.exp;
  let levelExp = player.level * 20 + 100;
  let progressExp = (currentExp / levelExp) * 100;
  
  // --- Initialize Progress Bar
  var expBar = new ldBar("#exp-bar");
  expBar.set(progressExp);

  // --- Display Initial Values
  $("#player-level").text("Current Level: " + player.level);
  $("#current-exp").text(currentExp);
  $("#level-exp").text(" / " + levelExp);

  // --- Add Experience ---
  $("#add-exp").click(function(){
    // --- Force variables to reevaluate
    currentExp = currentExp + 30;
    levelExp = player.level * 20 + 100;
    progressExp = (currentExp / levelExp) * 100;

    // --- Level-up logic ---
    if (currentExp >= levelExp && player.level <=9 ) {
      let remainder = currentExp - levelExp;
      currentExp = 0 + remainder;
      if (player.level <= 9) {
        player.level++;
      }
    }
    if (player.level == 10) {
      currentExp = 300;
      levelExp = 300;
    }

    // --- Update Player object
    player.exp = currentExp;
    localStorage.setItem('objPlayer', JSON.stringify(player));

    // --- Display updated values
    expBar.set(progressExp);
    console.log(progressExp);
    $("#current-exp").text(currentExp);
    $("#level-exp").text(" / " + levelExp);
    $("#player-level").text("Current Level: " + player.level);
  });

  //--- Clear Experience
  $("#clear-exp").click(function(){
    currentExp = 0;
    player.exp = currentExp;
    localStorage.setItem('objPlayer', JSON.stringify(player));
    $("#current-exp").text(currentExp);
    $("#level-exp").text(" / " + levelExp);
  });
});

// ===== Level Setter =====
const lvl = new Vue( {
  el: '#lvl',
  data () {
    return {
      value: 0,
      options: {
        dotSize: 25,
        width: 'auto',
        height: 10,
        contained: false,
        direction: 'ltr',
        data: null,
        min: 0,
        max: 10,
        interval: 1,
        disabled: false,
        clickable: true,
        duration: 0.5,
        adsorb: false,
        lazy: false,
        tooltip: 'focus',
        tooltipPlacement: 'top',
        tooltipFormatter: void 0,
        useKeyboard: false,
        enableCross: true,
        fixed: false,
        minRange: void 0,
        maxRange: void 0,
        order: true,
        marks: false,
        dotOptions: void 0,
        process: true,
        dotStyle: void 0,
        railStyle: void 0,
        processStyle: void 0,
        tooltipStyle: void 0,
        stepStyle: void 0,
        stepActiveStyle: void 0,
        labelStyle: void 0,
        labelActiveStyle: void 0,
      }
    }
  },
  mounted () {
  },
  methods: {
    setLevel() {
      player.level = this.value;
      localStorage.setItem('objPlayer', JSON.stringify(player));
      $("#player-level").text("Current Level: " + player.level);
      $('#level-saved').fadeIn('slow', function(){
        $('#level-saved').delay(2000).fadeOut();
        }
       )
      console.log(player.level);
    }
  },
  components: {
    'vueSlider': window[ 'vue-slider-component' ],
  }
})
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
