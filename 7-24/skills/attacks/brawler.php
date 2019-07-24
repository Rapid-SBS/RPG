  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Crane Kick -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseCranekick" role="button" aria-expanded="false" aria-controls="collapseCranekick">
        <input type="radio" name="ability" value="Crane Kick" v-model="attackSelection">
        <h6>Crane Kick</h6>
      </label>

      <!-- Destabilize -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseDestabilize" role="button" aria-expanded="false" aria-controls="collapseDestabilize">
        <input type="radio" name="ability" value="Destabilize" v-model="attackSelection">
        <h6>Destabilize</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-brawler" class="row mx-auto pad-10 max-wide-380">

    <!-- Crane Kick -->
    <div class="collapse mx-auto" id="collapseCranekick" data-parent="#attack-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Kick your opponent with perfect form.<br>DMG = 3 x (Player ATT).<br>Costs 5 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Destabilize -->
    <div class="collapse mx-auto" id="collapseDestabilize" data-parent="#attack-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Attack the pressure points of your foe, disrupting their chi flow.<br>Triple Critical Hit Chance.<br>Critical Hits apply Stun debuff.<br>DMG = 2 x (Player INT).<br> Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">3x</span>
            Crit Chance
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->