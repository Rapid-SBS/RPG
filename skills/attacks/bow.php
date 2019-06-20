  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Toxic Arrow -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseToxicarrow" role="button" aria-expanded="false" aria-controls="collapseToxicarrow">
        <input type="radio" name="ability" value="Toxic Arrow" v-model="attackSelection">
        <h6>Toxic Arrow</h6>
      </label>

      <!-- Steel Jaw Trap -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseSteeltrap" role="button" aria-expanded="false" aria-controls="collapseSteeltrap">
        <input type="radio" name="ability" value="Steel Jaw Trap" v-model="attackSelection">
        <h6>Steel Jaw Trap</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-bow" class="row mx-auto pad-10 max-wide-380">

    <!-- Toxic Arrow -->
    <div class="collapse mx-auto" id="collapseToxicarrow" data-parent="#attack-bow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Deals damage and applies Poison debuff.<br> DMG = Weapon ATT + Player ATT.<br> Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">3</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Steel Jaw Trap -->
    <div class="collapse mx-auto" id="collapseSteeltrap" data-parent="#attack-bow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Deals damage and applies Stun debuff.<br>DMG = Player ATT.<br> Costs 5 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->