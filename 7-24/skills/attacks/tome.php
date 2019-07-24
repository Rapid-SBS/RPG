  <div class="row justify-content-center">
    
    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Light Burst -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseLightburst" role="button" aria-expanded="false" aria-controls="collapseLightburst">
        <input type="radio" name="ability" value="Light Burst" v-model="attackSelection">
        <h6>Light Burst</h6>
      </label>

      <!-- Constrict -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseConstrict" role="button" aria-expanded="false" aria-controls="collapseConstrict">
        <input type="radio" name="ability" value="Constrict" v-model="attackSelection">
        <h6>Constrict</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-tome" class="row mx-auto pad-10 max-wide-380">

    <!-- Light Burst -->
    <div class="collapse mx-auto" id="collapseLightburst" data-parent="#attack-tome">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire a burst of light at all enemies.<br>DMG = Weapon ATT + Player INT.<br>Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">1</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Constrict -->
    <div class="collapse mx-auto" id="collapseConstrict" data-parent="#attack-tome">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Bind your enemy with chains of light.<br>Deals damage and stuns enemy for 1 turn.<br>DMG = Player INT.<br> Costs 5 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->