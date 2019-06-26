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

  <style> 
    .ldBar-label { margin-top: -10px; }
    .ldBar-label::before{content:"Experience: ";display:inline}
  </style>
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
    <div class="col" style="width: 100%; margin-bottom: -80px; z-index: -1;">
      <div id="exp-bar" class="mx-auto" 
      data-stroke="#00dd00" 
      data-stroke-width="15" 
      data-stroke-trail-width="15"
      style="width: 100%; height: 20%; margin-top: -10px; "></div>
    </div>
  </div>

  <div id="level-up" class="text-center text-lightgreen" style="display: none; margin-top: -15px;">
    <h4 class="pad-b-10">Level Up!</h4>
  </div>

  <div class="row text-center mx-auto">
    <div class="col">
      <p>Enter a value between 1 and 100.</p>
    </div>
  </div><!-- /.row -->

  <div id="input-invalid" class="text-white text-center text-danger" style="display: none;">
    <h5 class="pad-b-10">Invalid Input!</h5>
  </div>

  <form class="form-inline">
    <div class="form-group pad-b-20 mx-auto">
        <input type="number" maxlength="3" class="form-control mx-auto" style="width: 90px;" id="inputExp" aria-describedby="playerName" placeholder="Enter #" required>
        <button type="submit" id="add-exp" class="btn btn-primary mar-l-10">Add Experience</button>
    </div><!-- /.form-group -->
  </form>

  <div id="lvl" class="text-center mx-auto wide-220">
    <vue-slider
      ref="slider"
      v-model="value"
      v-bind="options"
    ></vue-slider>
    <h5>New Level: {{ value }}</h5>
    <button @click="setLevel" class="btn btn-primary mar-20">Set Level</button>
  </div>

</div><!-- /.container -->

<div id="level-saved" class="text-white text-center pad-10 bg-lightgreen" style="display: none;">
  <h5 class="pad-10">Level Updated!</h5>
</div>

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));

var currentExp = parseInt(player.exp);
var levelExp = parseInt(player.level) * 20 + 100;
var progressExp = (currentExp / levelExp) * 100;

// --- Initialize Progress Bar
var expBar = new ldBar("#exp-bar");
expBar.set(progressExp);


// ===== Experience Bar + Add Exp =====
$(document).ready(function(){   
  // --- Display Initial Values
  $("#player-level").text("Current Level: " + player.level);
  $("#current-exp").text(currentExp);
  $("#level-exp").text(" / " + levelExp);

  // --- Add Experience ---
  $("#add-exp").click(function(){
    event.preventDefault();
    let addExp = document.getElementById('inputExp').value;
    addExp = parseInt(addExp);

    // --- Evaluate validity of input ---
    if (isNaN(addExp) || addExp < 1 || addExp > 100) {
      $('#input-invalid').fadeIn('slow', function(){
        $('#input-invalid').delay(3000).fadeOut();
      })
    } else {
      // --- Force variables to reevaluate
      currentExp = parseInt(currentExp) + parseInt(addExp);
      levelExp = parseInt(player.level) * 20 + 100;
      progressExp = (currentExp / levelExp) * 100;

      console.log("Current Exp:" + currentExp);
      console.log("AddExp:" + addExp);

      // --- Level-up logic ---
      if (currentExp >= levelExp && player.level <= 9 ) {
        let remainder = parseInt(currentExp) - parseInt(levelExp);
        currentExp = 0 + parseInt(remainder);
        progressExp = (currentExp / levelExp) * 100;  
        if (player.level <= 9) {
          player.level++;
          $('#level-up').fadeIn('slow', function(){
            $('#level-up').delay(1500).fadeOut();
          })
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
      console.log("Exp:" + progressExp + "%");
      console.log(currentExp + " / " + levelExp);
      $("#player-level").text("Current Level: " + player.level);
    }
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
      player.exp = 0;
      currentExp = 0;
      expBar.set(0);
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
