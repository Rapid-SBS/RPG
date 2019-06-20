  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Fatal Strike -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseFatalstrike" role="button" aria-expanded="false" aria-controls="collapseFatalstrike">
        <input type="radio" name="ability" value="Fatal Strike" v-model="attackSelection">
        <h6>Fatal Strike</h6>
      </label>

      <!-- Acid Vial -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseAcidvial" role="button" aria-expanded="false" aria-controls="collapseAcidvial">
        <input type="radio" name="ability" value="Acid Vial" v-model="attackSelection">
        <h6>Acid Vial</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-dagger" class="row mx-auto pad-10 max-wide-380">

    <!-- Fatal Strike -->
    <div class="collapse mx-auto" id="collapseFatalstrike" data-parent="#attack-dagger">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Deal a stealthly blow to your enemy.<br>Your Critical Hit Chance increases by 1 for each Poison effect you currently have on the enemy.<br>(Max 3x Crit Chance).<br>DMG = 2 x (Player ATT).<br>Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Acid Vial -->
    <div class="collapse mx-auto" id="collapseAcidvial" data-parent="#attack-dagger">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Throw a homebrew alchemical acid that can eat through nearly anything.<br>Deals damage and lowers enemy DEF for 2 turns.<br>DMG = Weapon ATT.<br> Costs 7 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">6</span>
            Weapon ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">-6</span>
            Enemy DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->