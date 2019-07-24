  <div class="row justify-content-center">

  <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Vital Shot -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseVitalshot" role="button" aria-expanded="false" aria-controls="collapseVitalshot">
        <input type="radio" name="ability" value="Vital Shot" v-model="attackSelection">
        <h6>Vital Shot</h6>
      </label>

      <!-- Cover Fire -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseCoverfire" role="button" aria-expanded="false" aria-controls="collapseCoverfire">
        <input type="radio" name="ability" value="Cover Fire" v-model="attackSelection">
        <h6>Cover Fire</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-crossbow" class="row mx-auto pad-10 max-wide-380">

    <!-- Vital Shot -->
    <div class="collapse mx-auto" id="collapseVitalshot" data-parent="#attack-crossbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Target an enemy's weak point and pierce their defenses.<br> DMG = 2 x (Player ATT).<br> Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">-4</span>
            Enemy DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Cover Fire -->
    <div class="collapse mx-auto" id="collapseCoverfire" data-parent="#attack-crossbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Provide cover fire for your allies. Inaccurate, but increases DEF of all allies for 1 turn.<br>DMG = Weapon ATT + Player ATT.<br>Costs 5 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">4</span>
            Weapon ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">3x</span>
            Miss Rate
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+2</span>
            Ally DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->