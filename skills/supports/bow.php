 <div class="row justify-content-center">

    <!-- Mark Enemy -->
    <a class="btn text-white pad-10 mar-5 bg-green" data-toggle="collapse" href="#collapseMarkenemy" role="button" aria-expanded="false" aria-controls="collapseMarkenemy">
      <h6>Mark Enemy <span class="badge badge-light text-teal">2</span></h6>
    </a>

    <!-- Healing Salve -->  
    <a class="btn text-white pad-10 mar-5 bg-green" data-toggle="collapse" href="#collapseHealingsalve" role="button" aria-expanded="false" aria-controls="collapseHealingsalve">
      <h6>Healing Salve <span class="badge badge-light text-teal">3</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="support-bow" class="row mx-auto pad-10">

    <!-- Mark Enemy -->
    <div class="collapse mx-auto" id="collapseMarkenemy" data-parent="#support-bow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Mark an enemy, lowering their DEF for one turn.<br> Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">-2</span>
            Enemy DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Healing Salve -->
    <div class="collapse mx-auto" id="collapseHealingsalve" data-parent="#support-bow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Apply a soothing ointment to yourself or an ally.<br>HEAL = 2 x (Player INT).<br> Costs 3 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->