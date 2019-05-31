<div class="row">
  <!-- Mark Enemy -->
  <a class="btn text-white pad-10 mar-5 bg-green" data-toggle="collapse" href="#collapseMark" role="button" aria-expanded="false" aria-controls="collapseMark">
    <h6>Mark Enemy <span class="badge badge-light text-teal">2</span></h6>
  </a>
  <!-- Salve -->
  <a class="btn text-white pad-10 mar-5 bg-green" data-toggle="collapse" href="#collapseSalve" role="button" aria-expanded="false" aria-controls="collapseSalve">
    <h6>Salve <span class="badge badge-light text-teal">2</span></h6>
  </a>
</div><!-- /.row -->

<div id="support-archer" class="row">

  <!-- Mark Enemy -->
  <div class="collapse mx-auto" id="collapseMark" data-parent="#support-archer">
    <div class="card light-transparency">
      <div class="card-header text-center">
        <h6>Support Ability</h4>
      </div>
      <div class="card-body pad-5">
        <p class="card-text text-center">Lower enemy DEF for one turn. <br> Costs 2 Mana.</p>
      </div>
      <ul class="list-group text-center light-transparency">
        <li class="list-group-item align-items-center" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-green">-2</span>
          Enemy DEF
        </li>
      </ul>
    </div><!-- /.card -->
  </div><!-- /.collapse -->

  <!-- Salve -->
  <div class="collapse mx-auto" id="collapseSalve" data-parent="#support-archer">
    <div class="card light-transparency">
      <div class="card-header text-center">
        <h6>Support Ability</h4>
      </div>
      <div class="card-body pad-5">
        <p class="card-text text-center">Heal yourself or one ally. <br>HEAL = 2HP<br> Costs 2 Mana.</p>
      </div>
      <ul class="list-group text-center light-transparency">
        <li class="list-group-item align-items-center" style="padding: .35rem 1.25rem;">
          <span class="badge badge-light text-red">+2</span>
          HP
        </li>
      </ul>
    </div><!-- /.card -->
  </div><!-- /.collapse -->

</div><!-- /.row -->