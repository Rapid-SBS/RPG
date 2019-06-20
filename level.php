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
  <script src="rangeslider/rangeslider.js"></script>

  <title>RPGenerator</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="rangeslider/rangeslider.css">

</head>

<body>

  
<div class="text-white text-center bg-primary">
  <h5 class="pad-10"> Character Level </h5>
  <p class="pad-b-10" style="margin-bottom: 0;">Add Experience points or manually set level.</p>
</div>

<div class="container">
  <div class="row pad-t-40">
      <div class="col mx-auto max-wide-380">
        <input
            type="range"
            min="0"                
            max="10"                
            step="1"                  
            value="1"
            >
        <h4 id="setlevel" class="text-center mx-auto pad-t-10"><output></output></h4>
      </div>
    </div>  

    <div class="row">
      <div class="wide-275 mx-auto text-center">
        <button id="save-level" type="submit" class="btn btn-primary mar-20">Set Level</button>
      </div>
    </div>

</div><!-- /.container -->

<div id="level-saved" class="text-white text-center pad-10 mar-b-20 bg-lightgreen" style="display: none;">
  <h5 class="pad-10">Level Updated!</h5>
</div>

<script>
var player = JSON.parse(localStorage.getItem('objPlayer'));
var $element = $('input[type="range"]');
var $output = $('output');

  $(document).ready(function(){ // ----- Save Name -----

    function updateOutput(el, val) {
      el.textContent = val;
    }

    $element
      .rangeslider({
        polyfill: false,
        onInit: function() {
          updateOutput($output[0], this.value);
        }
      })
      .on('input', function() {
        updateOutput($output[0], this.value);
      });

    $("#save-level").click(function(){
      var playerLevel = $("#setlevel").val();
      player.level = playerLevel;

      console.log(player.level)

      localStorage.setItem('objPlayer', JSON.stringify(player));
      $('#level-saved').fadeIn('slow', function(){
        $('#level-saved').delay(3000).fadeOut();
        }
       )
    });
  });

</script>

<footer class="footer mt-auto text-center bg-lightgray">
  <div class="container pad-20">
    <div class="pad-b-20">
      <a class="btn btn-dark text-white mar-r-10 mar-l-10" href="http://rapid-phyre.net" role="button">Restart</a>
      <a class="btn btn-dark text-white mar-r-10 mar-l-10" href="player-menu.php" role="button">Continue</a>
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
