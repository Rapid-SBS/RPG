  <div class="row justify-content-center">

    <!-- Wind Arrow -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseWindarrow" role="button" aria-expanded="false" aria-controls="collapseWindarrow">
      <h6>Wind Arrow <span class="badge badge-light text-teal">5</span></h6>
    </a>

    <!-- Net Trap -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseNettrap" role="button" aria-expanded="false" aria-controls="collapseNettrap">
      <h6>Net Trap <span class="badge badge-light text-teal">5</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-longbow" class="row mx-auto pad-10">

    <!-- Wind Arrow -->
    <div class="collapse mx-auto" id="collapseWindarrow" data-parent="#attack-longbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">The wind grants your arrow increased velocity.<br> DMG = 2 x (Player ATT).<br> Costs 5 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Net Trap -->
    <div class="collapse mx-auto" id="collapseNettrap" data-parent="#attack-longbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Throw a net over your enemies and fire at will.<br>Doubles enemy Miss Rate for 2 turns.<br>DMG = Weapon ATT.<br>Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">4</span>
            Weapon ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">2x</span>
            Enemy Miss Rate
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->