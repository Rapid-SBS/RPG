  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Starfire -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseStarfire" role="button" aria-expanded="false" aria-controls="collapseStarfire">
        <input type="radio" name="ability" value="Starfire" v-model="ultimateSelection">
        <h6>Starfire</h6>
      </label>

      <!-- Abyss Break -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseAbyssbreak" role="button" aria-expanded="false" aria-controls="collapseAbyssbreak">
        <input type="radio" name="ability" value="Abyss Break" v-model="ultimateSelection">
        <h6>Abyss Break</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-aether" class="row mx-auto pad-10 max-wide-380">

    <!-- Starfire -->
    <div class="collapse mx-auto" id="collapseStarfire" data-parent="#ultimate-aether">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Light falls from the sky and barrages a single enemy.<br>DMG = 4 x (Player INT).<br> Costs 9 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Abyss Break -->
    <div class="collapse mx-auto" id="collapseAbyssbreak" data-parent="#ultimate-aether">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Open a massive rift to the Shadow Abyss beneath your enemies, overwhelming them with darkness.<br>Ignores all enemy RES.<br>DMG = 3 x (Player INT).<br> Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-blue">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->