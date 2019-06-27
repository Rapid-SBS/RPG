  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Runic Circle -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseRuniccircle" role="button" aria-expanded="false" aria-controls="collapseRuniccircle">
        <input type="radio" name="ability" value="Runic Circle" v-model="attackSelection">
        <h6>Runic Circle</h6>
      </label>

      <!-- Flame Vortex -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseFlamevortex" role="button" aria-expanded="false" aria-controls="collapseFlamevortex">
        <input type="radio" name="ability" value="Flame Vortex" v-model="attackSelection">
        <h6>Flame Vortex</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-runestone" class="row mx-auto pad-10 max-wide-380">

    <!-- Runic Circle -->
    <div class="collapse mx-auto" id="collapseRuniccircle" data-parent="#attack-runestone">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Activate a runic circle beneath an enemy, dealing damage and stunning them for 1 turn.<br>DMG = 2 x (Player INT).<br> Costs 5 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-blue">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Flame Vortex -->
    <div class="collapse mx-auto" id="collapseFlamevortex" data-parent="#attack-runestone">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Combine wind with fire to create a flame vortex, dealing damage to all enemies.<br>DMG = 2 x (Player INT).<br> Costs 7 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->