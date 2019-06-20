  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Glacial Spike -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseGlacialspike" role="button" aria-expanded="false" aria-controls="collapseGlacialspike">
        <input type="radio" name="ability" value="Glacial Spike" v-model="attackSelection">
        <h6>Glacial Spike</h6>
      </label>

      <!-- Frost Wave -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseFrostwave" role="button" aria-expanded="false" aria-controls="collapseFrostwave">
        <input type="radio" name="ability" value="Frost Wave" v-model="attackSelection">
        <h6>Frost Wave</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-ice" class="row mx-auto pad-10 max-wide-380">

    <!-- Glacial Spike -->
    <div class="collapse mx-auto" id="collapseGlacialspike" data-parent="#attack-ice">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Conjure a large spike of ice and hurl it at an enemy.<br>DMG = Weapon ATT + Player INT.<br> Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">4</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Frost Wave -->
    <div class="collapse mx-auto" id="collapseFrostwave" data-parent="#attack-ice">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Unleash a wave of subzero energy.<br> Double Critical Hit Chance.<br>Critical hits apply Frozen debuff instead of bonus damage.<br> DMG = Player INT.<br> Costs 5 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->