  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Air Slash -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseAirslash" role="button" aria-expanded="false" aria-controls="collapseAirslash">
        <input type="radio" name="ability" value="Air Slash" v-model="attackSelection">
        <h6>Air Slash</h6>
      </label>

      <!-- Shock Wave -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseShockwave" role="button" aria-expanded="false" aria-controls="collapseShockwave">
        <input type="radio" name="ability" value="Shock Wave" v-model="attackSelection">
        <h6>Shock Wave</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-windfu" class="row mx-auto pad-10 max-wide-380">

    <!-- Air Slash -->
    <div class="collapse mx-auto" id="collapseAirslash" data-parent="#attack-windfu">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Generate a wind with incredible shear force.<br>Critical Hits apply Bleed debuff.<br>Double Critical Hit Chance.<br>DMG = Weapon ATT + Player INT.<br>Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">5</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Shock Wave -->
    <div class="collapse mx-auto" id="collapseShockwave" data-parent="#attack-windfu">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Create a powerful shockwave that deals damage to all enemies, possibly stunning them.<br>Double Critical Hit Chance.<br>Critical Hits apply Stun debuff.<br>DMG = 2 x (Player INT).<br> Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">2x</span>
            Crit Chance
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->