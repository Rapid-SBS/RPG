  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Overhead Smash -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseOverheadsmash" role="button" aria-expanded="false" aria-controls="collapseOverheadsmash">
        <input type="radio" name="ability" value="Overhead Smash" v-model="attackSelection">
        <h6>Overhead Smash</h6>
      </label>

      <!-- Spinning Strike -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseSpinningstrike" role="button" aria-expanded="false" aria-controls="collapseSpinningstrike">
        <input type="radio" name="ability" value="Spinning Strike" v-model="attackSelection">
        <h6>Spinning Strike</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-bostaff" class="row mx-auto pad-10 max-wide-380">

    <!-- Overhead Smash -->
    <div class="collapse mx-auto" id="collapseOverheadsmash" data-parent="#attack-bostaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Smash your staff into your opponent's head.<br>Critical Hits apply Stun debuff.<br>Double Critical Hit Chance.<br>DMG = Weapon ATT + Player ATT.<br>Costs 5 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">10</span>
            Weapon ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">2x</span>
            Crit Chance
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Spinning Strike -->
    <div class="collapse mx-auto" id="collapseSpinningstrike" data-parent="#attack-bostaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Damage all enemies.<br>DMG = Weapon ATT + Player ATT.<br> Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">5</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->