  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Sky Breaker -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseSkybreaker" role="button" aria-expanded="false" aria-controls="collapseSkybreaker">
        <input type="radio" name="ability" value="Sky Breaker" v-model="ultimateSelection">
        <h6>Sky Breaker</h6>
      </label>

      <!-- Dragon Force -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseDragonforce" role="button" aria-expanded="false" aria-controls="collapseDragonforce">
        <input type="radio" name="ability" value="Dragon Force" v-model="ultimateSelection">
        <h6>Dragon Force</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-brawler" class="row mx-auto pad-10 max-wide-380">

    <!-- Sky Breaker -->
    <div class="collapse mx-auto" id="collapseSkybreaker" data-parent="#ultimate-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Soar into the sky and come crashing down on your opponent.<br> DMG = Weapon ATT + Player ATT.<br> Costs 9 Mana.</p> 
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">20</span>
            Weapon ATT
          </li>
        </ul>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Dragon Force -->
    <div class="collapse mx-auto" id="collapseDragonforce" data-parent="#ultimate-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Your Chi takes the form of a dragon and consumes your enemies.<br>Ignores all enemy RES.<br> DMG = 3 x (Player INT).<br> Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-teal">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->