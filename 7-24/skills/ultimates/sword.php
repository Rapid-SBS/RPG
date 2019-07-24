  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Aegis Armor -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseAegisarmor" role="button" aria-expanded="false" aria-controls="collapseAegisarmor">
        <input type="radio" name="ability" value="Aegis Armor" v-model="ultimateSelection">
        <h6>Aegis Armor</h6>
      </label>

      <!-- Bastion -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseBastion" role="button" aria-expanded="false" aria-controls="collapseBastion">
        <input type="radio" name="ability" value="Bastion" v-model="ultimateSelection">
        <h6>Bastion</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-sword" class="row mx-auto pad-10 max-wide-380">

    <!-- Aegis Armor -->
    <div class="collapse mx-auto" id="collapseAegisarmor" data-parent="#ultimate-sword">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Summon Aegis Armor for 2 turns, drastically raising your defenses.<br>Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+10</span>
            Bonus DEF
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-blue">+10</span>
            Bonus RES
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Bastion -->
    <div class="collapse mx-auto" id="collapseBastion" data-parent="#ultimate-sword">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
           <p class="card-text text-center">Become the ultimate protector, guarding your allies against physical damage for 1 turn.<br> Costs 10 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+8</span>
            Ally DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->