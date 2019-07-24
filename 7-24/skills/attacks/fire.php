  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Flare -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseFlare" role="button" aria-expanded="false" aria-controls="collapseFlare">
        <input type="radio" name="ability" value="Flare" v-model="attackSelection">
        <h6>Flare</h6>
      </label>

      <!-- Blaze Bomb -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseBlazebomb" role="button" aria-expanded="false" aria-controls="collapseBlazebomb">
        <input type="radio" name="ability" value="Blaze Bomb" v-model="attackSelection">
        <h6>Blaze Bomb</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-fire" class="row mx-auto pad-10 max-wide-380">

    <!-- Flare -->
    <div class="collapse mx-auto" id="collapseFlare" data-parent="#attack-fire">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Whip your target with searing flames.<br>Applies Burn debuff.<br>DMG = Weapon ATT + Player INT.<br> Costs 5 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">5</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Blaze Bomb -->
    <div class="collapse mx-auto" id="collapseBlazebomb" data-parent="#attack-fire">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fling a small orb that violently detonates, damaging all enemies.<br> DMG = Weapon ATT + Player INT.<br> Costs 7 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">1</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->