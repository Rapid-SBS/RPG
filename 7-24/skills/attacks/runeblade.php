  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Frost Core -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseFrostcore" role="button" aria-expanded="false" aria-controls="collapseFrostcore">
        <input type="radio" name="ability" value="Frost Core" v-model="attackSelection">
        <h6>Frost Core</h6>
      </label>

      <!-- Whirlwind -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseWhirlwind" role="button" aria-expanded="false" aria-controls="collapseWhirlwind">
        <input type="radio" name="ability" value="Whirlwind" v-model="attackSelection">
        <h6>Whirlwind</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-runeblade" class="row mx-auto pad-10 max-wide-380">

    <!-- Frost Core -->
    <div class="collapse mx-auto" id="collapseFrostcore" data-parent="#attack-runeblade">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Plunge your runeblade into your opponent, freezing them from within.<br>Applies Freeze debuff for 1 turn.<br>DMG = 2 x (Player ATT).<br> Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Whirlwind -->
    <div class="collapse mx-auto" id="collapseWhirlwind" data-parent="#attack-runeblade">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Spin up a whirlwind with your runeblade, damaging all enemies.<br>DMG = Weapon ATT + Player INT.<br> Costs 6 Mana.</p> 
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">3</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->