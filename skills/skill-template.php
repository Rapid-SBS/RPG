<div id="rpg-skills-archer-lvl3" class="row">

  <div class="row text-center pad-10"><h4>LEVEL 3</h4></div>

  <!-- Mark Enemy -->
  <a class="btn text-white pad-10 mar-5 bg-green" data-toggle="collapse" href="#collapseMark" role="button" aria-expanded="false" aria-controls="collapseMark">
    <h6>Mark Enemy <span class="badge badge-light text-teal">2</span></h6>
  </a>

  <!-- Salve -->
  <a class="btn text-white pad-10 mar-5 bg-green" data-toggle="collapse" href="#collapseSalve" role="button" aria-expanded="false" aria-controls="collapseSalve">
    <h6>Salve <span class="badge badge-light text-teal">2</span></h6>
  </a>

</div><!-- /.row -->

<div id="support-archer" class="row pad-10">

  <!-- Mark Enemy -->
  <div class="collapse mx-auto" id="collapseMark" data-parent="#support-archer">
    <div class="card bg-light">
      <div class="card-header text-center">
        <h6>Support Ability</h4>
      </div>
      <div class="card-body pad-10">
        <p class="card-text text-center">Lower enemy DEF for one turn. <br> Costs 2 Mana.</p>
      </div>
      <ul class="list-group list-group-flush text-center">
        <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
          <span class="badge bg-white text-green">-2</span>
          Enemy DEF
        </li>
      </ul>
    </div><!-- /.card -->
  </div><!-- /.collapse -->

  <!-- Salve -->
  <div class="collapse mx-auto" id="collapseSalve" data-parent="#support-archer">
    <div class="card bg-light">
      <div class="card-header text-center">
        <h6>Support Ability</h4>
      </div>
      <div class="card-body pad-10">
        <p class="card-text text-center">Heal yourself or one ally.<br> Costs 2 Mana.</p>
      </div>
      <ul class="list-group list-group-flush text-center">
        <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
          <span class="badge bg-white text-red">+2</span>
          HP
        </li>
      </ul>
    </div><!-- /.card -->
  </div><!-- /.collapse -->

</div><!-- /.row -->