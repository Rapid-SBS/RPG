  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Berserk -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseBerserk" role="button" aria-expanded="false" aria-controls="collapseBerserk">
        <input type="radio" name="ability" value="Berserk" v-model="ultimateSelection">
        <h6>Berserk</h6>
      </label>

      <!-- Titan Slayer -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseTitanslayer" role="button" aria-expanded="false" aria-controls="collapseTitanslayer">
        <input type="radio" name="ability" value="Titan Slayer" v-model="ultimateSelection">
        <h6>Titan Slayer</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-battleaxe" class="row mx-auto pad-10 max-wide-380">

    <!-- Berserk -->
    <div class="collapse mx-auto" id="collapseBerserk" data-parent="#ultimate-battleaxe">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Become an unstoppable force of rage, dealing damage to all enemies in your path.<br>You are immune to damage for 1 turn.<br> DMG = 3 x (Player ATT).<br> Costs 12 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Titan Slayer -->
    <div class="collapse mx-auto" id="collapseTitanslayer" data-parent="#ultimate-battleaxe">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Launch into the air and strike your enemy with superhuman strength. Ignores all enemy DEF.<br>Never misses, but cannot Crit.<br> DMG = 5 x (Player ATT).<br> Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy DEF = <span class="badge bg-white text-green">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->