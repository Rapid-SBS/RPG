  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Blackmarket Potion -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseBlackmarketpotion" role="button" aria-expanded="false" aria-controls="collapseBlackmarketpotion"><input type="radio" name="picked" value="Blackmarket Potion" v-model="supportSelection">
        <h6>Blackmarket Potion</h6>
      </label>

      <!-- Smoke Bomb -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseSmokebomb" role="button" aria-expanded="false" aria-controls="collapseSmokebomb">
        <input type="radio" name="picked" value="Smoke Bomb" v-model="supportSelection">
        <h6>Smoke Bomb</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-shuriken" class="row mx-auto pad-10 max-wide-380">

    <!-- Blackmarket Potion -->
    <div class="collapse mx-auto" id="collapseBlackmarketpotion" data-parent="#support-shuriken">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Drink a smuggled potion that heals you, but drains your mana.<br>HEAL = 4 HP.<br> Costs 3 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Smoke Bomb -->
    <div class="collapse mx-auto" id="collapseSmokebomb" data-parent="#support-shuriken">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Grants Hidden buff for 2 turns.<br>Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <strong>Hidden</strong>: You cannot be targeted by allies or enemies.
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->