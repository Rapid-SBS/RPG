  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Solar Wrath -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseSolarwrath" role="button" aria-expanded="false" aria-controls="collapseSolarwrath">
        <input type="radio" name="ability" value="Solar Wrath" v-model="attackSelection">
        <h6>Solar Wrath</h6>
      </label>

      <!-- Smite -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseSmite" role="button" aria-expanded="false" aria-controls="collapseSmite">
        <input type="radio" name="ability" value="Smite" v-model="attackSelection">
        <h6>Smite</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-mace" class="row mx-auto pad-10 max-wide-380">

    <!-- Solar Wrath -->
    <div class="collapse mx-auto" id="collapseSolarwrath" data-parent="#attack-mace">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Blast your foe with radiant light.<br>DMG = 2 x (Player INT).<br>Costs 4 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Smite -->
    <div class="collapse mx-auto" id="collapseSmite" data-parent="#attack-mace">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Smite your foe with your heavy mace.<br>DMG = Weapon ATT + Player ATT).<br> Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">4</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->