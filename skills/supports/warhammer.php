  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Eat Chicken -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseEatchicken" role="button" aria-expanded="false" aria-controls="collapseEatchicken"><input type="radio" name="picked" value="Eat Chicken" v-model="supportSelection">
        <h6>Eat Chicken</h6>
      </label>

      <!-- Rampage -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseRampage" role="button" aria-expanded="false" aria-controls="collapseRampage">
        <input type="radio" name="picked" value="Rampage" v-model="supportSelection">
        <h6>Rampage</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-warhammer" class="row mx-auto pad-10 max-wide-380">

    <!-- Eat Chicken -->
    <div class="collapse mx-auto" id="collapseEatchicken" data-parent="#support-warhammer">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Take a few bites of that drumstick you've been saving and restore health.<br>HEAL = 5 HP.<br> Costs 3 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Rampage -->
    <div class="collapse mx-auto" id="collapseRampage" data-parent="#support-warhammer">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">The heat of battle energizes you, sending you on an unstoppable rampage.<br>Boosts ATT and DEF for 2 turns.<br>Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">+2</span>
            Bonus ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+2</span>
            Bonus DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->