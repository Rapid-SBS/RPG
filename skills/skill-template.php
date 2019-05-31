<div class="row">
  <!-- Mark Enemy -->
  <a class="btn text-white pad-10 mar-5 bg-green" onclick="collapseMark()" href="#collapseMark">
    <h6>Mark Enemy <span class="badge badge-light text-teal">2</span></h6>
  </a>
  <!-- Salve -->
  <a class="btn text-white pad-10 mar-5 bg-green" onclick="collapseSalve()" href="#collapseSalve">
    <h6>Salve <span class="badge badge-light text-teal">2</span></h6>
  </a>
</div><!-- /.row -->

<div id="support-archer" class="row">
  <!-- Mark Enemy -->
  <div class="wide-275" style="display: none;" id="collapseMark">
    <div class="card card-body light-transparency">
      Lowers enemy DEF for one turn. <br> Costs 2 Mana.
    </div>
  </div>
  <!-- Salve -->
  <div class="wide-275" style="display: none;" id="collapseSalve">
    <div class="card card-body light-transparency">
      Heal yourself or one ally. <br> Costs 2 Mana.
    </div>
  </div>
</div><!-- /.row -->

<script>
function collapseMark() {
  $("#collapseMark").addClass("js-collapse-show");
  $("#collapseMark").removeClass("js-collapse-hide");
  $("#collapseSalve").addClass("js-collapse-hide");
  $("#collapseSalve").removeClass("js-collapse-show");
}

function collapseSalve() {
  $("#collapseSalve").addClass("js-collapse-show");
  $("#collapseSalve").removeClass("js-collapse-hide");
  $("#collapseMark").addClass("js-collapse-hide");
  $("#collapseMark").removeClass("js-collapse-show");
}

</script> 