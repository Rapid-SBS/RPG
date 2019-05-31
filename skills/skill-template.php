<div class="row">
  <!-- Mark Enemy -->
  <a class="btn text-white pad-10 mar-5 bg-green" onclick="showMark()" onblur="hideMark()" href="#collapseMark">
    <h6>Mark Enemy <span class="badge badge-light text-teal">2</span></h6>
  </a>
  <!-- Salve -->
  <a class="btn text-white pad-10 mar-5 bg-green" onclick="showSalve()" onblur="hideSalve()" href="#collapseSalve">
    <h6>Salve <span class="badge badge-light text-teal">2</span></h6>
  </a>
</div><!-- /.row -->

<div id="support-archer" class="row">
  <!-- Mark Enemy -->
  <div class="wide-275 js-collapse-hide" id="collapseMark">
    <div class="card card-body light-transparency">
      Lowers enemy DEF for one turn. <br> Costs 2 Mana.
    </div>
  </div>
  <!-- Salve -->
  <div class="wide-275 js-collapse-hide" id="collapseSalve">
    <div class="card card-body light-transparency">
      Heal yourself or one ally. <br> Costs 2 Mana.
    </div>
  </div>
</div><!-- /.row -->

<script>
function showMark() {
  $("#collapseMark").addClass("js-collapse-show");
  $("#collapseMark").removeClass("js-collapse-hide");
}

function showSalve() {
  $("#collapseSalve").addClass("js-collapse-show");
  $("#collapseSalve").removeClass("js-collapse-hide");
}

function hideMark() {
  $("#collapseMark").addClass("js-collapse-hide");
  $("#collapseMark").removeClass("js-collapse-show");
}

function hideSalve() {
  $("#collapseSalve").addClass("js-collapse-hide");
  $("#collapseSalve").removeClass("js-collapse-show");
}

</script> 