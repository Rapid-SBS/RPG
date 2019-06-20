  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Assassinate -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseAssassinate" role="button" aria-expanded="false" aria-controls="collapseAssassinate">
        <input type="radio" name="ability" value="Assassinate" v-model="ultimateSelection">
        <h6>Assassinate</h6>
      </label>

      <!-- Chaos Blade -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseChaosblade" role="button" aria-expanded="false" aria-controls="collapseChaosblade">
        <input type="radio" name="ability" value="Chaos Blade" v-model="ultimateSelection">
        <h6>Chaos Blade</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-dagger" class="row mx-auto pad-10 max-wide-380">

    <!-- Assassinate -->
    <div class="collapse mx-auto" id="collapseAssassinate" data-parent="#ultimate-dagger">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Become hidden for one turn and strike your enemy the next.<br>Never misses, but cannot Crit.<br> DMG = 5 x (Player ATT).<br> Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">0x</span>
            Crit Chance
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Chaos Blade -->
    <div class="collapse mx-auto" id="collapseChaosblade" data-parent="#ultimate-dagger">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Shroud your enemies in smoke then ravage them with your blade. <br> Lowers enemy accuracy for one turn. <br> DMG = 3 x (Player ATT).<br> Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">-1</span>
            Enemy Accuracy
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->