  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Wind Arrow -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseWindarrow" role="button" aria-expanded="false" aria-controls="collapseWindarrow">
        <input type="radio" name="ability" value="Wind Arrow" v-model="attackSelection">
        <h6>Wind Arrow</h6>
      </label>

      <!-- Net Trap -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseNettrap" role="button" aria-expanded="false" aria-controls="collapseNettrap">
        <input type="radio" name="ability" value="Net Trap" v-model="attackSelection">
        <h6>Net Trap</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-longbow" class="row mx-auto pad-10 max-wide-380">

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