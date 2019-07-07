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

  <title>RPGenius</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/classes.js"></script>
  <script type="text/javascript" src="js/globals.js"></script>

</head>

<body>

<div class="text-white text-center bg-primary">
  <h1 class="pad-t-20 pad-b-10"> RPGenius </h1>
  <p class="pad-b-20"> An online tool for curating a<br> DnD-lite experience. </p>
</div>

<h2 class="pad-20 text-gray text-center pulsing-text-dark"> Select a Class... </h2>

<!-- Class Selection -->  
<div id="app" class="x-scroll-wrapper pad-t-10 pad-b-10 pad-l-5 pad-r-5 mar-r-10">
 
  <!-- Cards -->
  <a v-for="(rpgClass, index) in classes" @click="selectClass(rpgClass)"  class="character-card card text-decoration-none x-scroll-item mar-l-5 mar-r-5 hover-blue">
  <div class="text-white  rounded" v-bind:class="'bg-'+backgrounds[index]">
    <div class="card-header text-center">
      <h5>{{rpgClass.name}}</h5>
    </div>
    <div class="card-body pad-10 text-center">
      <p class="card-text text-center">{{rpgClass.description}}</p>
    </div>
    <ul class="list-group text-center">
      <li class="list-group-item align-items-center " v-bind:class="'bg-'+backgrounds[index]" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-red">{{rpgClass.hp}}</span>
        HP
      </li>
      <li class="list-group-item align-items-center " v-bind:class="'bg-'+backgrounds[index]" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-orange">{{rpgClass.att}}</span>
        ATT
      </li>
      <li class="list-group-item align-items-center " v-bind:class="'bg-'+backgrounds[index]" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-green">{{rpgClass.def}}</span>
        DEF
      </li>
      <li class="list-group-item align-items-center " v-bind:class="'bg-'+backgrounds[index]" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-purple">{{rpgClass.int}}</span>
        INT
      </li>
      <li class="list-group-item align-items-center " v-bind:class="'bg-'+backgrounds[index]" style="padding: .35rem 1.25rem;">
        <span class="badge badge-light text-blue">{{rpgClass.res}}</span>
        RES
      </li>
    </ul>
  </div>
  </a>


</div><!-- /Class Selection -->
</div>

<script> 
let backgrounds = [
  'orange','green','teal','blue','gray','paleblue','purple'
];
let classes = [
    characterClassCreator.createWarrior(),
    characterClassCreator.createMonk(),
    characterClassCreator.createCleric(),
    characterClassCreator.createArcher(),
    characterClassCreator.createMage(),
    characterClassCreator.createRuneMaster(),
    characterClassCreator.createRogue()
    ]

var app = new Vue({
  el: '#app',
  data: {
    classes: classes,
    backgrounds:backgrounds
  },
  methods: {
    selectClass: function(rpgClass) {
      console.log('setting ' + rpgClass.name);
      localStorage.setItem('objRpgclass', JSON.stringify(rpgClass));
      window.location.href = 'weapon-select.php';
    }
  }
  
})
console.log(classes);

var player = {
  level: 0,
  exp: 0
}

var skills = {
  hp: 0,
  att: 0,
  def: 0,
  int: 0,
  res: 0,
  mana: 1  
}

localStorage.setItem('objPlayer', JSON.stringify(player));
localStorage.setItem('objSkills', JSON.stringify(skills));



</script>

<footer class="footer mt-auto text-center bg-lightgray">
  <div class="container pad-20">
    <div class="pad-b-20">
      <a class="btn btn-dark text-white mar-r-10 mar-l-10" href="rulebook.php" role="button">Rulebook</a>
    </div>
    <span class="text-muted">&copy;RPGenius 2019. All Rights Reserved.</span>
  </div>
</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>