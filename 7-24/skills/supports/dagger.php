  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Alchemic Potion -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseAlchemicpotion" role="button" aria-expanded="false" aria-controls="collapseAlchemicpotion"><input type="radio" name="picked" value="Alchemic Potion" v-model="supportSelection">
        <h6>Alchemic Potion</h6>
      </label>

      <!-- Deadly Toxin -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseDeadlytoxin" role="button" aria-expanded="false" aria-controls="collapseDeadlytoxin">
        <input type="radio" name="picked" value="Deadly Toxin" v-model="supportSelection">
        <h6>Deadly Toxin</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-dagger" class="row mx-auto pad-10 max-wide-380">

    <!-- Alchemic Potion -->
    <div class="collapse mx-auto" id="collapseAlchemicpotion" data-parent="#support-dagger">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Speed up your metabolism with a homebrewed potion.<br>Regenerate HP and boost your stats for 2 turns.<br>HEAL = 6 HP.<br> Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">+1</span>
            Bonus ATT
          </li>
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">+1</span>
            Bonus DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Deadly Toxin -->
    <div class="collapse mx-auto" id="collapseDeadlytoxin" data-parent="#support-dagger">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Disperse a specially-formulated toxin, applying<br>Deadly Poison debuff to all enemies.<br> Costs 5 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->